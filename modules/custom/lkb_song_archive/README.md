# LKB Song Request Archive

Archives one song title per completed request, independently of audience data.
No contributed dependencies beyond the existing Webform module.

## Use

Open **Reports > Song request archive** at `/admin/reports/song-requests`.
Administrators can view/search the report, sort by popularity or title, download
summary CSV (matching the current search) or all individual song entries, and
clear the archive through an explicit confirmation page.

Permissions:

- `view song request archive`: report and CSVs.
- `clear song request archive`: destructive confirmation action (restricted).

Administrator roles receive these automatically through their existing admin
status. Grant the read permission to other trusted roles as needed. Singer roles
do not need archive permissions to manage their original submissions.

The report shows requests and share of the total archive, not songs performed.
It does not include songs with zero requests. Labels include the artist where
present in the form. Whitespace is normalised; other changes to song labels,
including artist/spelling differences between forms, can create separate groups.
Keep option labels consistent across future set lists.

## Future forms

In the Webform's **Settings > General > Third party settings > Song request
archive**, check **Archive song requests**, select the single-choice song select
field and save. Duplicating an enabled form carries these settings with it;
verify the selected field after changing its elements. No IDs/years are hardcoded
in runtime capture. Ordinary text fields, multiple-choice fields, drafts and
unconfigured forms are not archived.

## Storage and behaviour

`lkb_song_archive` has only an internal serial ID and `song`. It retains no name,
IP address, user, Show, source submission ID, date or form ID. Its index supports
song grouping. Nothing is sent to external services.

`lkb_song_archive_receipt` contains only IDs of already-captured original
submissions, with no archive record ID or song. A unique key prevents duplicate
capture on repeated saves and simultaneous attempts. The marker disappears when
the original submission is deleted. The archive entry remains. Both writes are
transactional and participate in the original submission's database transaction.
Archive failures are surfaced rather than silently accepting an unarchived
request. Missing/empty optional song values are skipped.

Completion is captured once, including a draft later completed. Later edits
retain the originally requested song and do not create additional requests.
Changing a Show's publication status has no effect on the archive.

Clear deletes archive entries only and retains receipts. Consequently, saving or
reimporting already-captured submissions does not silently repopulate a cleared
archive. New submissions continue to count. The confirmation includes all rows
present at execution, including requests arriving after the page was opened.
Normal Drupal Form API provides POST confirmation and CSRF protection. CSVs use
UTF-8, standard quoting, and spreadsheet-formula protection; exports are private
and non-cacheable. Report values are escaped.

Module uninstall deletes its tables, including history. Back up first. Normal
module updates and disabling a form's archive setting do not clear history.

## Install / deploy

Copy the custom module into place, back up the target database and run:

```sh
drush pm:enable lkb_song_archive -y
drush php:script modules/custom/lkb_song_archive/scripts/enable-current-forms.php
drush cache:rebuild
```

The setup script enables the three current 2026 forms and validates their song
field. It is safe to repeat, and changes only their archive settings. It expects
all three forms already exist. The Christmas form was present in the local
active database but absent from the old export, so its export is now included in
`sync/`. Review that existing form before creating it on another environment.
Do not import the whole `sync/` directory without reconciling unrelated drift.

If deploying accumulated changes, follow the previous AI/Content Creator
uninstall-before-package-removal steps in `docs/maintenance.md` as well.

## Import existing surviving requests

After enabling the intended forms:

```sh
drush php:script modules/custom/lkb_song_archive/scripts/backfill.php
```

Imports completed submissions in batches of 100. Receipts make repeat runs safe.
It imports only explicitly enabled forms, resolves their current visible song
labels, and stops on invalid mappings. Already deleted requests cannot be
reconstructed. The obsolete Song analysis archive is not imported; it was
explicitly deleted as part of abandoning the previous implementation.
Import creates no audience submissions and sends no emails.

## Verification

On the local database after taking a backup:

```sh
ddev exec drush php:script modules/custom/lkb_song_archive/scripts/verify.php
```

The integration script creates synthetic fixtures inside a rolled-back database
transaction. It checks completion/drafts, opt-in, edit deduplication, singer
source deletion, unpublishing Shows, CSV contents/escaping, permissions,
confirmation tokens, future form settings, clear behaviour and new capture
after clear. Real archive rows are restored by rollback, though database serial
counters can advance. Do not run fixture tests against live production.

## Recovery

Back up the archive tables as part of routine database backups; CSV is also
available before a deliberate clear. Restoring config or reinstalling the module
alone does not recover deleted history. A source backfill cannot recover rows
whose original submissions were deleted, and intentionally respects existing
capture receipts after a clear.

For a read-only Gin rendering regression check (warnings treated as errors):

```sh
ddev exec drush php:script modules/custom/lkb_song_archive/scripts/verify-gin.php
```
