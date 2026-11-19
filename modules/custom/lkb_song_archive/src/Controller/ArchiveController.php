<?php

namespace Drupal\lkb_song_archive\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\lkb_song_archive\SongArchive;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Restricted report and exports, backed by the same grouped query.
 */
final class ArchiveController extends ControllerBase {

  public function __construct(private readonly SongArchive $archive) {}

  public static function create(ContainerInterface $container): static {
    return new static($container->get('lkb_song_archive.archive'));
  }

  public function report(Request $request): array {
    $search = mb_substr(trim((string) $request->query->get('q', '')), 0, 200);
    $sort = $request->query->get('sort') === 'title' ? 'title' : 'popular';
    $total = $this->archive->total();
    $rows = [];
    foreach ($this->archive->summary($search, $sort)->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(50)->execute() as $row) {
      $rows[] = [
        ['data' => ['#plain_text' => $row->song]],
        (int) $row->requests,
        $total ? number_format(100 * $row->requests / $total, 2) . '%' : '0%',
      ];
    }
    $build = [
      '#cache' => ['max-age' => 0],
      'intro' => ['#markup' => $this->t('<p>Archive total: <strong>@count requests</strong>. Records survive deletion of audience submissions and unpublishing Shows. Counts start when archiving is enabled, plus explicitly imported requests. Songs never requested do not appear.</p>', ['@count' => $total])],
      'filter' => [
        '#type' => 'form',
        '#id' => 'lkb-song-archive-filter',
        '#method' => 'get',
        '#action' => Url::fromRoute('lkb_song_archive.report')->toString(),
        'q' => ['#type' => 'search', '#id' => 'lkb-song-archive-search', '#title' => $this->t('Search songs'), '#name' => 'q', '#value' => $search],
        'sort' => ['#type' => 'select', '#id' => 'lkb-song-archive-sort', '#title' => $this->t('Sort'), '#name' => 'sort', '#options' => ['popular' => $this->t('Most requested'), 'title' => $this->t('Song title')], '#value' => $sort],
        'submit' => ['#type' => 'submit', '#id' => 'lkb-song-archive-apply', '#value' => $this->t('Apply')],
      ],
      'summary_csv' => ['#type' => 'link', '#title' => $this->t('Download summary CSV (current search)'), '#url' => Url::fromRoute('lkb_song_archive.csv', ['mode' => 'summary'], ['query' => ['q' => $search, 'sort' => $sort]]), '#prefix' => '<p>', '#suffix' => '</p>'],
      'entries_csv' => ['#type' => 'link', '#title' => $this->t('Download all individual song entries CSV'), '#url' => Url::fromRoute('lkb_song_archive.csv', ['mode' => 'entries']), '#prefix' => '<p>', '#suffix' => '</p>'],
      'table' => ['#type' => 'table', '#header' => [$this->t('Song'), $this->t('Requests'), $this->t('Share of all requests')], '#rows' => $rows, '#empty' => $this->t('No archived requests match this search.')],
      'pager' => ['#type' => 'pager'],
    ];
    if ($this->currentUser()->hasPermission('clear song request archive')) {
      $build['clear'] = ['#type' => 'link', '#title' => $this->t('Clear archive…'), '#url' => Url::fromRoute('lkb_song_archive.clear'), '#prefix' => '<p>', '#suffix' => '</p>'];
    }
    return $build;
  }

  /**
   * Prevent spreadsheet formulas while retaining UTF-8 titles and valid CSV.
   */
  public static function csvText(string $value): string {
    return preg_match('/^[\s\x{FEFF}]*[=+@\-]/u', $value) ? "'" . $value : $value;
  }

  public function csv(Request $request, string $mode): StreamedResponse {
    $search = mb_substr(trim((string) $request->query->get('q', '')), 0, 200);
    $sort = $request->query->get('sort') === 'title' ? 'title' : 'popular';
    $response = new StreamedResponse(function () use ($mode, $search, $sort): void {
      $output = fopen('php://output', 'wb');
      // UTF-8 BOM allows spreadsheet applications to detect the encoding.
      fwrite($output, "\xEF\xBB\xBF");
      if ($mode === 'summary') {
        fputcsv($output, ['Song', 'Requests', 'Share of all requests (%)'], ',', '"', '');
        $total = $this->archive->total();
        foreach ($this->archive->summary($search, $sort)->execute() as $row) {
          fputcsv($output, [self::csvText($row->song), $row->requests, $total ? number_format(100 * $row->requests / $total, 2, '.', '') : '0.00'], ',', '"', '');
        }
      }
      else {
        fputcsv($output, ['Song'], ',', '"', '');
        foreach (\Drupal::database()->select('lkb_song_archive', 'a')->fields('a', ['song'])->orderBy('id')->execute() as $row) {
          fputcsv($output, [self::csvText($row->song)], ',', '"', '');
        }
      }
      fclose($output);
    });
    $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
    $response->headers->set('Content-Disposition', 'attachment; filename="song-requests-' . $mode . '.csv"');
    $response->headers->set('Cache-Control', 'private, no-store, max-age=0');
    $response->headers->set('X-Content-Type-Options', 'nosniff');
    return $response;
  }

}
