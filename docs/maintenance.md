# LKB maintenance and handover

Last updated: 19 November 2026 (Europe/London).

## Purpose

Make small, reviewable improvements to livekaraokeband.co.uk, a Drupal 11 site.
The owner reports strong organic performance for live karaoke, bandeoke and
rockaoke, and strong corporate booking performance. Preserve these strengths.
This document is the starting point for future maintenance sessions.

## Evidence and limits

The initial review inspected repository files only. Exported configuration is
not proof of the current production configuration. Search rankings, analytics,
mail delivery, production backups and the booking journey have not been verified.
No production changes or form submissions were made.
`ddev describe -j` could not access the Docker socket (permission denied), so
its reported stopped services do not establish actual container health. Runtime
checks require Docker access from an environment that has permission.

## Repository baseline

- Drupal uses the legacy project layout: the repository root is the web root.
- `composer.json` manages core, contributed modules, themes and Drush.
- The working `composer.lock` records `drupal/core-recommended` at 11.4.13.
  This is a file observation, not a claim about production or update availability.
- `composer.lock` already had substantial uncommitted changes at the start of
  this review. These belong to the existing work and have been preserved.
- `.ddev/config.yaml` defines project `livekaraokeband11`, Drupal 11, PHP 8.3,
  nginx-fpm and MariaDB 11.8. Host PHP and Composer were not found on PATH;
  DDEV is installed.
- `sync/` contains exported Drupal configuration.
- `sync/system.theme.yml` selects `lkb11` as the default theme and `gin` for admin.
  `themes/custom/lkb11/lkb11.info.yml` declares Bootstrap 5 as its base theme.
  Other custom themes exist; establish which are used before editing them.
- Exported performance settings enable CSS/JS aggregation and set page cache
  max age to 86,400 seconds. Runtime settings and response headers need checking.
- Exported HTTPS/www settings select HTTPS without www. Redirect settings enable
  automatic redirects and use 301 by default. Preserve canonical URL behaviour.
- Exported forms include open `contact` and `conditional_contact`, a closed
  `contact_old`, musician applications and song-request forms. Determine which
  forms are actually embedded in published pages before changing them.
- Exported default mail interface is `SMTPMailSystem`; mail-related packages
  include SMTP and Symfony Mailer. Actual routing and delivery need verification.
- `.cpanel.yml` contains a deployment task copying non-hidden root entries into
  the hosting web directory. Establish whether this is the active deployment
  process before relying on it; do not trigger it during local maintenance.
- Settings files are tracked. Keep credentials, customer enquiries, database
  dumps and private logs out of maintenance notes and review output.

## How to carry out each improvement

1. Record the reported problem, affected page/admin screen, expected behaviour
   and a reproducible example. Choose one small change at a time.
2. Check `git status --short` and preserve unrelated work. Establish local runtime
   health and whether active database configuration differs from `sync/`.
3. Before database/configuration work, establish a recoverable backup of database
   and files and the exact code/configuration version to restore.
4. Implement and inspect the local diff. For configuration changes, export and
   review the relevant configuration; avoid importing the entire `sync/` directory
   without first checking drift and unrelated changes.
5. Validate the affected behaviour locally. For booking changes, check required
   fields, conditional paths, validation errors, confirmation, saved submission
   and notifications using intercepted local email. A success message alone does
   not establish email delivery. Keep real customer data out of tests.
6. Check desktop/mobile navigation and affected calls to action. Where rendering
   or routing changes, compare page title, canonical, robots directives, headings,
   internal links, redirects and sitemap inclusion before and after.
7. Record files/configuration changed, evidence, remaining limitations, deployment
   steps and rollback. Verify the deployment procedure before using it.

## Next checks

These are investigation items, not confirmed defects:

- Confirm the owner's first functional priority and reproduce it locally.
- Confirm DDEV/Drupal boots, database availability and active/exported config drift.
- Trace the published enquiry form through notification and confirmation paths.
- Establish backup, restore and deployment procedures with the hosting setup.
- Check dependency health separately, accounting for the existing lockfile changes;
  do not combine a broad dependency update with a small functionality fix.

## Work log

### 18 November 2026 — Initial baseline and documentation

- Inspected project manifests, DDEV configuration, theme selection, selected
  exported performance/redirect/mail settings and form inventory.
- Created this maintenance and handover document and linked it from the README.
- Preserved the pre-existing `composer.lock` changes.
- Validation: reviewed documentation against the named repository files;
  no runtime behaviour changed. Runtime and production checks remain outstanding.
- Rollback: remove the README maintenance link and this document.

### Template for the next change

- Date and objective:
- Reproduction / baseline:
- Files and configuration changed:
- Validation and evidence:
- Deployment and rollback:
- Remaining work:

### 18 November 2026 — AI implementation review (read-only)

Objective: establish whether Drupal's AI packages are integrated into the site
before deciding whether to remove them. No modules or configuration were changed.

Runtime verification now succeeded through DDEV with Docker access: Drupal
11.4.13 bootstrapped and connected to the local database at
`https://livekaraokeband11.ddev.site`. This supersedes the initial session's
Docker access limitation for this review. Production was not inspected.

Confirmed in active local configuration:

- Enabled modules: `ai`, `ai_provider_openai`, `ai_ckeditor`,
  `ai_content_suggestions`, `ai_logging`. The zero values in `core.extension`
  are module weights, not disabled flags.
- Full HTML editor has configured AI completion, spelling correction, summary
  and tone tools. The exported editor toolbar includes `aickeditor`.
- Content Suggestions enables SEO title suggestions and tone changes using
  `openai__gpt-4o`. These are editorial assistance features.
- OpenAI is selected as the default provider for chat, structured responses,
  embeddings, moderation, image generation, transcription and speech generation.
  Defaults alone do not establish that these operations are invoked.
- OpenAI provider references the Key module key ID `openai`; key validity and
  API connectivity were not tested and credential values were not displayed.
- Prompt logging is disabled in both AI and AI Logging settings. This review
  does not establish actual historical API usage or spend.

Repository checks found no AI/OpenAI references in custom modules or themes,
no matching AI references in exported webforms or entity form displays, and no
exported AI automator/agent/search configuration filenames. Exported Klaro
entries for AI alt-text generation and Deepchat are disabled and do not prove
those features are implemented. No dependency on AI was identified for the
public enquiry journey, SEO metadata generation or public page rendering.
This is bounded evidence rather than proof about all production content.

Active configuration differs from exports: for example, active image generation
uses `gpt-image-1` while the export names `dall-e-3`, and Content Suggestions has
a different settings structure. Do not blindly import `sync/` or overwrite this
drift during removal.

Conclusion: AI is enabled and integrated for optional in-Drupal editorial
assistance. Configuration does not prove anyone uses it. External content
curation and pasting normal text into nodes does not require these integrations.
A removal task should inspect uninstall dependencies, clean editor integration,
uninstall dependent AI submodules before their packages, and verify editing,
rendering and enquiry functionality. Removal has not been performed.

Validation: read active settings using Drush `status` and selected `config:get`
commands; searched custom code and exported configuration. No AI requests, test
emails, content writes or production actions were performed.

### 18 November 2026 — Removed AI and Key locally

Owner authorised uninstall and Composer removal, including Key if unused.
Verified active enabled-module dependencies: only AI Core required Key, and the
only Key entity was `openai`. Uninstalled `ai_ckeditor`,
`ai_content_suggestions`, `ai_logging`, `ai_provider_openai`, `ai`, and `key`.
Drupal's uninstall hook cleaned Full HTML editor AI toolbar/plugin settings.
This also deletes AI-owned configuration/log data and the stored OpenAI key.
It does not revoke the credential at OpenAI.

Removed Composer requirements `drupal/ai` and `drupal/ai_provider_openai`.
Composer removed 20 packages total, including Key and unused transitive AI
packages/libraries, with zero installs or updates. Compared against the
pre-removal working lockfile, every retained package version is unchanged.
The lockfile still includes the owner's pre-existing changes relative to Git.

Updated only the AI-related exported configuration: removed six module entries,
AI editor controls, AI settings/prompts/log view and the OpenAI key export.
Preserved unrelated active/exported configuration drift. Disabled Klaro service
definitions remain inert; they are not enabled AI integrations.
Composer scaffold rewrote README during removal; restored the maintenance link.

Validation completed:

- Drupal cache rebuild succeeded after package removal.
- Composer validation passed with the existing responsive_menu development
  version constraint warning. Composer reported no security advisories.
- Runtime assertion: no AI/Key modules or AI editor settings remain.
- Before/after active exports: only `core.extension` and Full HTML editor changed,
  alongside deletion of 27 AI/Key configuration objects.
- Contact form configuration unchanged; local homepage and `/form/contact`
  both returned HTTP 200. No enquiry submitted or notification sent.
- `git diff --check` passed. Interactive editor and full booking submission/mail
  tests were not performed.

Backups (sensitive; temporary local storage, not committed):
`/private/tmp/lkb-ai-removal-20261118/` contains `database.sql.gz`, pre-removal
`composer.json` / `composer.lock`, and before/after active configuration exports.
Move backups to appropriate durable private storage before relying on them for
long-term recovery. Temporary audit scripts and exports were removed from the
web-root working directory after verification.

Production deployment is still outstanding. Do not remove production module
code before uninstalling modules there. With a fresh production database/files
backup and the old packages still present, verify Key is still unused by other
features, then run:

```sh
drush pm:uninstall ai_ckeditor ai_content_suggestions ai_logging ai_provider_openai ai key -y
```

Then deploy the reviewed Composer files and configuration changes, run
`composer install` for the locked dependency set and rebuild caches with
`drush cache:rebuild`. Follow the established hosting procedure; `.cpanel.yml`
copying files alone is not proof of a complete Composer deployment. Do not
blindly import all exported config: unrelated drift remains. Recheck public
pages, editor and enquiry journey on production after deployment.

Rollback locally: restore the pre-removal Composer files from the backup,
run `ddev composer install`, then restore the database using
`ddev import-db --file=/private/tmp/lkb-ai-removal-20261118/database.sql.gz` and
rebuild caches. Restore the pre-change exported config as part of a code
rollback. Database restore replaces current data; use only the matching backup
and account for any submissions/content created since it was taken.

### 18 November 2026 — Unused Composer module audit

Read-only comparison of installed Composer Drupal module/theme packages against
both active local `core.extension` and exported `sync/core.extension.yml`.
Checked all extensions within each package, including submodules, so an unused
parent module is not mistaken for an unused package when a submodule is enabled.
No active/exported extension-status drift was found for the audited packages.

Five direct Composer requirements have no enabled extensions in either source,
and no other locked package lists them as a Composer requirement:

| Package | Purpose / consideration |
| --- | --- |
| `drupal/libraries` | Legacy/shared external library discovery; no custom-code API references found. Removing this module does not mean deleting the root `libraries/` assets used by other modules/themes. |
| `drupal/linkchecker` | Link checking; currently not enabled. |
| `drupal/navigation` | Contributed admin Navigation package; currently not enabled. Keep Drupal core's own Navigation files, which are part of core. |
| `drupal/stage_file_proxy` | Development helper for fetching production files; currently not enabled. Retain only if wanted for future local development. |
| `drupal/webform_remote_handlers` | REST/SOAP Webform integrations; currently not enabled. No custom-code references found. |

These are removal candidates based on local/runtime and repository evidence;
production enabled state must be checked separately before deployment. No
packages were removed in this audit. Other Drupal module/theme packages have
at least one enabled extension and should not be removed just because some
of their bundled submodules are disabled. Composer tooling packages such as
Drush, scaffold and installer plugins are not Drupal modules and cannot be
judged by `core.extension` alone.

Audit used a temporary Drush script, removed after execution. Machine-readable
results remain outside the repository at
`/private/tmp/lkb-module-package-audit.json`. No configuration/content was changed.

### 18 November 2026 — Removed four unused Composer packages

Owner authorised removal of the audited unused packages while explicitly
retaining Stage File Proxy. Removed `drupal/libraries`, `drupal/linkchecker`,
`drupal/navigation` and `drupal/webform_remote_handlers` from Composer requirements,
lockfile and installed contributed module directories. All four were already
uninstalled in both active local and exported configuration, so no Drupal
uninstall or configuration changes were needed. Kept `drupal/stage_file_proxy`,
root `libraries/` assets and Drupal core Navigation code.

Validation: Composer performed exactly four removals, no installs or updates.
Compared with the immediately preceding working lockfile, every retained package
version is unchanged. Cache rebuild succeeded; Drupal bootstrapped with a
connected database. Homepage and `/form/contact` returned HTTP 200. Composer
validation passed with the existing responsive_menu development-constraint
warning; Composer reported no security advisories. README maintenance link was
restored after Composer scaffolding. No enquiry or email was submitted.

Pre-change Composer files and README are backed up outside the repository at
`/private/tmp/lkb-unused-modules-20261118/`. To reverse just this removal, restore
those Composer files and run `ddev composer install`, then rebuild caches.
The owner's earlier lockfile changes and the separate AI removal remain intact.

Production is unchanged. Before deploying, confirm these four modules are also
uninstalled there. Deploy the reviewed Composer changes using the established
hosting process and `composer install`, then rebuild caches and check public
pages and the enquiry journey. The separate AI removal's uninstall-before-code-
removal order still applies when deploying the combined changes.

### 18 November 2026 — Song archive diagnosis (read-only)

Traced Show `field_song_list` (Webform field), active Webform Content Creator
mappings, both song-analysis views and aggregate local submission data. No
requests, content or configuration changed. Temporary audit scripts removed.

Original workflow: Content Creator's submission-insert hook copies
`your_song_choice` into the `notes` base field of a new `song_analysis` Webform
submission. Rules `4_piece_2022` and `5_piece_2022` target only their respective
2022 request forms. Both disable update/delete synchronisation. This copying
runs on completed submissions (including draft-to-complete transitions), not
Show publication changes. Neither analysis view filters by Show publication.

Confirmed gap: no creator mappings exist for `song_request_4_piece_2026`,
`song_request_5_piece_2026` or `song_request_5_piece_2026_xmas`. Local database
contains respectively 1, 105 and 7 submissions in those forms, which these
rules cannot archive. One Show still references a 2017 form ID; investigate
whether that form exists before changing historical records.

Local archive has 1,971 submissions, 1,969 with nonempty notes; latest creation
is 21 January 2026 UTC. Existing raw 2022 forms have 405 and 400 submissions.
These counts describe this local database, not a verified production inventory.
Raw request forms and archive have no automatic purge configured.

Anonymity is incomplete: all 1,971 archive submissions have a nonempty IP-address
field and 13 have a nonzero user ID. The archive Webform does not enable
confidential mode or disable IP collection. Copying only the song into notes
has not prevented Webform from adding identifying metadata. No personal values
were displayed. Before repair, define precisely which metadata the archive
should retain, and ensure new and existing records meet that definition.

Both views read only `song_analysis` submissions' notes, and both have only a
default display (no page/block display). `song_analysis` displays ten per page;
`song_analysis_` sorts notes alphabetically and sets items-per-page to zero.
The latter is essentially a duplicate reporting view, not a separate archive.
No references embedding these view IDs were found in custom code or exported
configuration; database-stored page content was not searched.

Proposed next work: durable song-only archival for all current request forms,
explicit metadata handling, idempotent copying/backfill, checks that unpublishing
a Show preserves archive data, and a clear reporting view. Backfilling requires
a reliable duplicate strategy: historical copies do not have an explicit
source-submission mapping in the current Creator rules. Do not blindly recopy
all historical requests. The earlier intermittent 2022 failures have not yet
been reproduced and should not be attributed solely to the missing 2026 rules.

### 18 November 2026 — Removed old song-copying functionality

Owner requested a fresh approach and authorised deletion of `song_analysis` and
`song_analysis_` views plus uninstall/Composer removal of Webform Content Creator.
Deleted both views from active local configuration, uninstalled
`webform_content_creator`, and removed `drupal/webform_content_creator` from
Composer. Removed both Creator mapping exports, both view exports, and the module
entry from exported `core.extension`. No unrelated configuration imported.

The `song_analysis` Webform and its 1,971 historical submissions are preserved,
as are all original audience request submissions. The anonymisation limitations
noted above remain in those historical records. No replacement archive has been
implemented: new requests are no longer copied by the removed module, but their
normal Webform submission storage remains in place.

Validation: runtime assertions confirm both views, Creator configuration and the
enabled module are absent. All six song-related form submission counts match
the preceding read-only audit. Composer removed exactly one package and changed
no retained package versions. Cache rebuild succeeded; homepage and contact
returned HTTP 200. Composer validation passed with the existing responsive_menu
constraint warning; no security advisories reported by Composer. README link
restored after scaffolding. Temporary verification script removed.

Backups outside the web root: `/private/tmp/lkb-song-archive-removal-20261118/`
contains pre-change database dump, Composer files, README and the four removed
configuration exports. To reverse locally, restore the pre-change Composer
files, run `ddev composer install`, restore the matching database backup and
rebuild caches. Restore the four exports and the module entry in exported
configuration too. Database restore overwrites later content/submissions.

Production remains unchanged. Deployment order while old module code is present:
back up production, delete the two named view configurations, uninstall
`webform_content_creator`, then deploy reviewed package/config changes and run
`composer install` and `drush cache:rebuild`. Include the prior AI uninstall steps
if deploying all changes together. Do not blindly import unrelated config drift.

### 19 November 2026 — Deleted obsolete Song analysis Webform

Owner authorised deletion of the remaining `song_analysis` Webform. Backed up
the local database, then deleted the form via Drupal's entity API, which also
deleted its 1,971 historical archive submissions. Removed
`sync/webform.webform.song_analysis.yml`. This supersedes the earlier decision
to preserve the old archive; no replacement archive exists yet.

Runtime verification confirmed the form configuration and all its submissions
are gone. Compared per-form submission counts before/after deletion: every
other form's count is unchanged, including original audience requests. Cache
rebuild succeeded. Temporary deletion/verification script removed.

Backup: `/private/tmp/lkb-song-analysis-delete-20261119/database.sql.gz` and the
removed form export in the same private temporary directory. Recovery requires
the matching database backup to recover submissions, not just restoring YAML;
a full database restore would replace changes made since the backup.

Production remains unchanged. When deploying this deletion, back up production
and delete only Webform ID `song_analysis` through Drupal's Webform UI/entity
API. Its archive submissions will be deleted too. Preserve the original
`song_request_*` forms. Include the previously documented module uninstall
ordering when deploying all accumulated changes.

### 19 November 2026 — Implemented anonymous song request archive

Owner approved a replacement independent archive, report, CSV downloads and
confirmed clear action. Added and enabled custom module `lkb_song_archive`.
Full design, operation, deployment and recovery notes are in
`modules/custom/lkb_song_archive/README.md`.

Behaviour:

- On completed request insert or draft completion, copy only the visible song
  label into a dedicated indexed archive table. No personal/source/time columns
  exist there. Normalise whitespace; preserve title/artist labels.
- Separate source-side receipt table (submission ID only, no song/archive link)
  prevents counting the same request again on edits or repeat imports. Deleting
  an audience submission removes its receipt, never its archived song. Unpublishing
  a Show does not change archive data. Both capture writes are transactional.
- Per-Webform General settings expose archive opt-in and single-choice song
  selector, with server-side validation. Future forms need no code changes.
  Broken mappings fail explicitly instead of silently losing capture.
- Report at `/admin/reports/song-requests`: total count, title search, popularity
  or title sorting, pagination, counts and percentage share. Summary CSV follows
  the current search; individual CSV exports all song-only entries.
- Separate read/export and restricted clear permissions. Administrator roles
  have access. Anonymous access denied. Clear uses standard CSRF-protected Form
  API confirmation and leaves originals/configuration/receipts intact, so later
  edits and imports do not refill history after a deliberate clear.

Enabled capture on `song_request_4_piece_2026`, `song_request_5_piece_2026`, and
`song_request_5_piece_2026_xmas`. Imported their 113 surviving completed requests
(1 + 105 + 7); repeating import added zero. Original submission counts unchanged.
Older 2022 forms are not enabled; the obsolete deleted archive was not recovered
or imported. Historical requests already deleted are not represented.

Configuration changes: module entry in `core.extension`, archive third-party
settings/dependency on the two existing 2026 exports, and an export of the
already-existing Christmas form, which had not previously been in `sync/`.
Unrelated active/exported drift is preserved. No Composer dependency added.

Validation completed:

- Transactional integration suite (`scripts/verify.php`) passed for normal
  completion, drafts, opt-in, future form, invalid mapping, repeat saves/edits,
  source deletion, receipt cleanup, Show unpublishing, grouping/search, both CSV
  modes and quoting/formula safety, read versus clear permissions, anonymous
  denial, CSRF confirmation, clear/recapture behaviour and full fixture rollback.
- Rendered report and General settings forms successfully through Drupal; clear
  form has an explicit confirmation action and CSRF token. No browser visual
  inspection was performed.
- Reran tests with seeded data: 113 archive rows preserved after fixture rollback.
  Temporary verification scripts removed. Synthetic submissions send no emails.
- Confirmed active/exported archive settings match on all three forms. Homepage
  and contact HTTP 200; anonymous report HTTP 403. Cache rebuild succeeded.
- `git diff --check` passed. No production deployment or changes made.

Pre-install database backup:
`/private/tmp/lkb-song-archive-build-20261119/database.sql.gz`.
Follow module README deployment steps: copy code, enable module, configure target
forms, optionally import surviving requests, rebuild caches. Confirm the target
forms and permissions before production use. Do not blindly import all `sync/`.
The earlier module removal deployment instructions still apply to combined work.

Rollback: preserve any new archive history first, then restore the matching
pre-install database backup and matching pre-change code/configuration. A full
restore replaces later requests/content. Uninstalling the module drops archive
and receipt tables; reinstalling alone cannot restore historical data. CSV and
routine database backups should be retained according to the owner's needs.

### 19 November 2026 — Fixed Gin report filter warnings

Owner reported an undefined `#id` warning and consequent `str_replace(NULL)`
deprecation in Gin when opening the archive report. Root cause was the custom
GET filter render array, which bypasses Form API generation and lacked a form
ID. Added explicit stable IDs to the filter form and its search, sort and submit
controls; this also associates the visible labels with their inputs. No Gin or
contributed code changed, and no archive/submission data changed.

Added read-only `scripts/verify-gin.php`: forces the real Gin theme, treats PHP
warnings/deprecations as exceptions, renders the report and checks IDs, labels,
GET method, retained search and selected sort. Passed. Rebuilt Drupal caches.
This covers the admin-theme rendering gap in the original integration checks.
Rollback is the isolated render-array ID change; production remains unchanged.

### 19 November 2026 — Simplified Show content type

Owner authorised deleting 15 CRM fields and all their data. Verified all 15
storages were exclusive to Show, and the live-banner view depends only on Show
publication, date and location. Backed up the database before cleanup.

Deleted Show fields and their now-unused node storages:
`field_musician_bass`, `field_musician_dj`, `field_dj`, `field_musician_drums`,
`field_enquiry_date`, `field_enquiry_source`, `field_musician_guitar`,
`field_musician_keyboards`, `field_line_up`, `field_pa`, `field_requests`,
`field_show_length`, `field_sound`, `field_status`, `field_musician_vocals`.
Used Drupal Field API and the Drupal 11.4 FieldPurger service to purge only these
storages, including current and revision values. Confirmed no queued definitions
or corresponding current/revision tables remain. Core node `status` (published)
is retained and is distinct from deleted CRM `field_status`.

Removed Field Group configuration from Show displays, including the Booking,
Enquiry, Show, Band and Schedule tabs. Ordered retained editor fields as title,
date, location, town, referenced Webform, scheduling and metatags, while retaining
existing standard node controls. Kept the site-wide Field Group module/package;
no modules were uninstalled by this change. Retained layout and field formatters.

Cleaned obsolete CRM columns/handlers/dependencies/cache tags from the existing
`daisuke` view before deleting fields; the view remains enabled and executes.
Updated only the cleanup delta in exported configuration: removed 30 field/storage
exports and changed the Show form, two Show view displays and Daisuke view.
Preserved unrelated active/exported configuration drift. The live banner view,
block configuration and current-shows listing were unchanged.

Validation:

- Before/after hashes of retained Show date/location/town/Webform field data
  match. Counts of Show nodes, all Webform submissions and archive rows unchanged.
- Simplified editor retains title, date, location, town, song form and publish/
  unpublish scheduling; no listed CRM fields or Field Group tabs remain.
- Rolled-back fixture: published Show renders venue and embedded song selector
  for guests; banner includes it while published and excludes it on unpublishing.
- Show-linked synthetic request adds an archive song, singer deletion preserves
  it, and fixture rollback restores the original archive count.
- Field/table removal checks, dependent Daisuke execution, cache rebuild and
  `git diff --check` passed. No real request was submitted; no emails were sent.

Reproducible deployment/audit and verification scripts are in
`scripts/maintenance/`, with instructions in its README. The apply script refuses
shared fields on environments that differ from local. Production is unchanged.
Follow the previous module uninstall/package-removal order if deploying all
accumulated work together; review configuration drift before any import.

Backup: `/private/tmp/lkb-show-cleanup-20261119/database.sql.gz`, the preceding
`sync-before/` exports, and private before/after active configuration snapshots.
Recovery of deleted field values requires the matching database backup and
pre-change exports, not just re-adding fields. Restoring the whole database
replaces activity since the backup. Temporary export-delta script removed.

### 19 November 2026 — Removed Daisuke view

Owner authorised removing the now-obsolete `daisuke` view. Backed up its active
configuration and cleaned export under
`/private/tmp/lkb-daisuke-delete-20261119/`, deleted `views.view.daisuke` locally
and removed its export from `sync/`. Rebuilt caches. No Show nodes, field data,
audience submissions or archive entries were changed. Updated the Show
verification script to expect the view's absence rather than execute it.
Legacy lkb10 theme CSS selectors referencing the old view are inert and retained.

Production is unchanged. Delete `views.view.daisuke` there through Drupal/Drush
when deploying this reviewed change. Recovery requires restoring the backed-up
view configuration only; no content/database restoration is needed for this
isolated deletion.

### 19 November 2026 — Restored visible Show scheduling controls

Owner reported Scheduler missing from Show add/edit despite being enabled on
the content type. Root cause: `scheduler_settings` remained hidden in the Show
form display after Field Group tabs were removed. The raw publish/unpublish
widgets existed, but Scheduler groups them into that hidden wrapper, so the
original structural field-presence assertions missed the rendering failure.

Restored `scheduler_settings` as a visible content-region component (weight -15)
in active and exported Show form display. Preserved Scheduler enable flags,
permissions, fieldset/collapse preferences and every existing date/time value.
Updated the reusable Show cleanup script to preserve this Scheduler wrapper.
No node saves, publication actions, cron runs or scheduling value changes.

Added `scripts/maintenance/verify-show-scheduler.php`: renders both a new Show
form and an existing Show edit form under the actual Gin theme and asserts that
Scheduling options and both date/time inputs appear in the final HTML. Passed
for both screens. Rebuilt caches; `git diff --check` passed. This repairs the
UI only; no end-to-end cron scheduling test was required or performed.

Pre-fix active form configuration is backed up at
`/private/tmp/lkb-show-scheduler-fix-20261119/form-display.yml`.
Deploy only the reviewed Show form-display change alongside previous work,
respecting existing configuration drift. Production remains unchanged.

### 19 November 2026 — Standalone scheduling fields below Song list

Owner requested scheduling fields immediately below Song list without a
collapsible Scheduling options group. Added/enabled custom `lkb_show_editor`
module and its `core.extension` export entry. No contributed module/theme edits
or Composer changes.

A Show-only form hook runs explicitly after Scheduler and Field Layout. Converts
the Scheduler details element into an unlabelled ordinary container, and places
it in Song list's layout region directly after the song field. An invisible
wrapper preserves Scheduler's DOM ID, attached default-time/seconds JavaScript,
access controls and internal child grouping. Publish on and Unpublish on render
as standalone visible fields without a heading or collapse control. Other node
types and Scheduler's enable/collapse settings are unchanged.

Updated `verify-show-scheduler.php`: both add and existing edit screens render
under Gin with Song list, Publish on, Unpublish on in that order; scheduling
inputs have no details ancestor or Scheduling options heading. A user without
scheduling permission still gets no date/time inputs. All checks passed; cache
rebuild and `git diff --check` passed. No content saved or scheduling dates changed.

Deploy code and enable `lkb_show_editor`, then rebuild caches. Roll back this
presentation change by uninstalling that module and removing its exported module
entry; no content/data restore is needed. See module README for implementation
and verification. Production remains unchanged.

### 19 November 2026 — Filter Show song-list choices to open Webforms

Owner requested open-only choices for `field_song_list`. The contributed widget
has a fixed allow-list setting but no built-in dynamic open-only filter. Added a
Show-only filter in `lkb_show_editor` using each Webform's `isOpen()` method,
respecting scheduled open/close windows and archive status. Preserves categories,
existing widget/access restrictions and empty selection; no contributed edits or
configuration/data writes.

Existing-reference exception: a closed form already referenced by this Show is
retained and labelled “current selection — closed”, to avoid losing historical
references when editing unrelated fields. All other unavailable forms are
excluded. New Shows offer only currently open forms. Normal select validation
rejects values outside the offered choices.

Added transactional `verify-show-webforms.php`: open fixture offered; closed,
archived and future-scheduled fixtures excluded; existing closed default safely
retained and labelled. Fixture configuration rolled back. Checks passed.
Scheduling add/edit rendering and permission checks also still pass. Cache
rebuild and `git diff --check` passed. No production changes.

Deploy the updated custom module code and rebuild caches. Undo this isolated
change by removing the option-filter code; no database restoration is needed.

### 19 November 2026 — Production missing-module deployment recovery prepared

Owner deployed code and ran Composer install before production module uninstalls.
Reported `updb`/`cim` blocked by missing AI, Key and Content Creator module code
still recorded in production `core.extension`. No production recovery commands
have been run by this session. Do not continue past the requirements warning.

Prepared `docs/deployment-recovery.md` with private production backup steps,
verified pre-removal local package versions, temporary Composer restoration,
normal module uninstalls, restoration of deployed manifests and next update/
configuration steps. Checked Drupal's official troubleshooting guidance. Local
pre-removal lockfile provides exact package versions; actual production
compatibility still must pass Composer. Retain normal uninstall hooks rather
than bypassing them by editing module entries. Production import drift and field
purging remain separate deployment considerations.

### Production recovery follow-up — legacy archive blocks config import

Owner reports restoration/uninstall/Composer/database-update steps succeeded.
`cim` now fails validation because production still has submissions in the
obsolete Song analysis Webform. Provided a fresh-backup and targeted Webform
entity deletion step in `docs/deployment-recovery.md`, followed by retrying
configuration import. This deletion was previously authorised locally and for
the deployed change; original request forms/new archive are outside its scope.
No production follow-up execution was performed or confirmed by this session.

### Production recovery status — configuration import succeeded

Owner confirmed `drush cim` succeeded after the legacy Song analysis deletion
instructions. This confirms the reported import blocker is resolved; no server
commands were executed by this session. Next: rebuild production caches, run the
new module's idempotent backfill for enabled current request forms, and verify
Show editing/scheduling, live banner, song requests, report and CSVs. Production
backfill totals and functional checks are not yet confirmed. Removal of field
configuration does not itself prove that queued deleted field data has finished
purging; that remains a separate production check.

### Production follow-up — sync drift and closed choices reported

Owner reports a successful configuration import but remaining differences on
production's configuration page, and closed forms still offered on new Shows.
Browser inspection was attempted but the browser access host is unavailable;
no authenticated production page was viewed. No production state changed here.

Rechecked the local open-only dropdown integration test: open forms offered,
closed/archived/future-scheduled forms excluded, existing closed references
preserved. It passed. Local `config:status` still shows substantial previously
preserved active/exported drift; this is not a production diagnosis or evidence
that production has the same differences. Requested production status names,
Show editor enabled-state and deployed filter-code presence after cache rebuild.
Do not export production configuration wholesale merely to hide the difference
list; individual differences must be understood first. No root cause for the
reported production dropdown behaviour has yet been established.

### Production sync status received — targeted diagnostics prepared

Owner provided production `config:status`: only Different entries, covering
backup schedule, Show form display, Klaro apps, Entries view and the two current
non-Christmas song forms. No entries reported Only in DB/Only in sync directory.
Exact production property differences still unknown.

Inspected those same items locally. Klaro differences are three empty callback
properties added by module defaults. Backup adds encryption defaults. Entries
adds a false option and normalises refresh interval from string to integer.
Show form content and the two Webforms differ only in mapping key order locally.
These observations are not substitutes for inspecting production values.

Added read-only `scripts/maintenance/config-drift.php` to compare only these
configurations, summarise long values, redact credential properties, and omit
nonempty callback bodies. It reports enabled state/filter-code presence and
builds an unsaved new Show as admin to detect closed choices. Local run reports
Show editor enabled, filter present and no closed choices. No nodes are saved,
no submissions made, no configuration imported/exported by the diagnostic.
Requested deploying this script and running it on production for exact evidence
before changing exported defaults or diagnosing the reported dropdown behaviour.

### Production diagnostics confirmed — normalization prepared

Owner ran `config-drift.php` on production. Output confirms Show editor enabled,
open-filter method present and zero closed choices on an unsaved new Show built
by production's CLI. Browser discrepancy is not reproduced in that check;
fresh page behaviour/exact closed examples or web-PHP cache state remain to be
checked. Do not treat CLI code loading as proof of PHP-FPM opcode cache state.

Production differences: mapping order in Show form/song forms/Entries option
maps, Entries refresh interval string versus integer, missing empty Klaro
callbacks and missing backup encryption defaults (production encrypt is null;
local is false). The encryption password remains redacted/unknown.

Prepared `normalize-config.php`: dry-run by default; validates the full diff of
only the reported 29 objects, allows only audited defaults, equivalent integer
casting and mapping order, and rejects functional changes. Refuses a nonempty
encryption password. On explicit apply, privately backs up previous exports,
writes active normalized representations into those sync files, and checks exact
matches. It never imports/saves database configuration or changes field data.

Local dry run passes for 29 files; test assertions accepted known defaults/order
and rejected changed consent status, nonempty callbacks/credentials, removed
settings and reordered lists. No normalization apply was run locally or on
production by this session. Owner must deploy the script and run dry/apply on
production, then retain those reviewed normalized YAML files in source control.

### 19 November 2026 — Production-copy diagnosis and archive-enabled choices

Owner refreshed local DDEV from production without CIM, then approved restricting
new Show choices to **open, archive-enabled song forms**. All work in this entry
was local; production was not accessed or changed, and no CIM was run.

Root cause of unexpected choices: the imported database globally marks both
2022 song forms, contact forms and musician application as open. The prior
open-only filter and rendered HTML correctly excluded Contact old (closed), but
still offered these eight globally open forms. This was not evidence of an
opcode-cache failure. Per-Show closed references and global Webform status are
separate. The owner clarified that only archived song-request forms belong here.

Updated `lkb_show_editor` to require both `isOpen()` and its existing Webform
`lkb_song_archive.enabled` flag. Added the archive module dependency. Current
local rendered choices are exactly:

- Song request - 4 piece 2026
- Song request - 5 piece 2026
- Song request - 5 piece 2026 Xmas

Preserves category/access/widget restrictions. Existing closed or non-archive-
enabled references remain available only on their own Show, labelled current
selection/unavailable for new Shows. No existing Show reference, Webform status,
archive setting, submission or archive record was changed by the filter.

Prevented an empty-choice fallback: the underlying Webform entity-select can
repopulate empty options from its entity handler. When no eligible forms remain,
clear that element's target type so it stays empty through final rendering.

Validation: expanded transactional dropdown suite passed for eligibility,
unavailable/untracked forms, closed and legacy reference preservation, and the
zero-eligible render case. Fixtures rolled back. Real imported form HTML shows
only the three eligible request forms. Gin add/edit scheduling layout and
permission checks also pass. The read-only drift diagnostic now reports both
closed and non-archive-enabled choices plus available form IDs.

Local email isolation: imported system.mail uses SMTPMailSystem, which was not
covered by DDEV's generated Symfony Mailer overrides. Added local-only SMTP
host/port/protocol/credential overrides to ignored `settings.ddev.php`, routing
SMTP to 127.0.0.1:1025 (Mailpit). Confirmed effective routing; no mail sent. These
ignored local settings must not be deployed and should be rechecked if DDEV
regenerates its settings file or after future production refreshes.

Applied the guarded config normalization locally: only 29 audited sync exports
updated (ordering/defaults/type normalization); database untouched. Backup export
files are in DDEV container `/tmp/lkb-config-normalize-e2a1f4f10a43` (temporary).
`drush config:status` now reports no differences. The updated YAML belongs in
source control so the drift does not recur on later deployments. No blanket
export/import or unrelated configuration changes.

Deploy only after the owner's live-show window: reviewed custom module changes
and normalized exports, then cache rebuild. New dropdown code alone needs no
updb/CIM; the archive module is already enabled. Rollback the isolated selector
change by restoring previous Show editor code; no data restore required. Restore
previous sync files from backup to undo only export normalization.
