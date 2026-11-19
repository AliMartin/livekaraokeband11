# Show cleanup — 19 November 2026

`show-fields.php` removes the obsolete CRM fields listed by the owner from Show,
removes Field Group tabs on Show displays, cleans dependent View handlers and
permanently purges only the deleted fields' current/revision data. It leaves Show
nodes, normal publication/scheduling, retained fields, audience submissions and
song archive data intact. Field Group itself remains installed; removing its
Show configuration does not uninstall a site-wide module.

Start with a fresh database backup and inspect the read-only audit:

```sh
ddev exec drush php:script scripts/maintenance/show-fields.php
```

After reviewing the audit, apply locally:

```sh
ddev exec env LKB_SHOW_CLEANUP_APPLY=1 drush php:script scripts/maintenance/show-fields.php
ddev exec drush cache:rebuild
ddev exec drush php:script scripts/maintenance/verify-show.php
```

On hosting, use the equivalent Drush commands without `ddev exec`; set
`LKB_SHOW_CLEANUP_APPLY=1` in the Drush command's environment. Keep the field
providers installed while running this cleanup. The script refuses to apply if
a listed field is shared by another bundle in that environment. Inspect any
production differences before applying. It does not uninstall any modules.
Deploy the reviewed matching configuration deltas afterwards; avoid importing
unrelated drift. Applying field configuration changes alone does not necessarily
purge queued field data immediately.

The deletion script snapshots active configuration into private files
`/tmp/lkb-show-cleanup-before.json` and `/tmp/lkb-show-cleanup-after.json` inside
the execution environment. These contain full configuration and must be kept
private. They are diagnostic snapshots, not substitutes for a database backup.
Local exported configuration was updated using only this operation's delta.
The script does not export configuration automatically.

`verify-show.php` checks field/table removal and the simplified editor, then uses
synthetic fixtures in a rolled-back transaction to verify guest rendering,
Show publication filtering in the live banner, Show-linked song capture and
survival after singer deletion. Run fixture tests locally, not on production.
It expects the new `lkb_song_archive` module and current 2026 request forms.
Serial counters may advance, but fixtures are rolled back.

Recovery requires the matching pre-cleanup database backup to restore the
deleted field data/revisions, plus the matching field/display/view exports.
Restoring only YAML cannot recover field values. A database restore replaces
newer requests/content, so account for activity since the backup.

Scheduler visibility regression check (read-only, renders add and edit in Gin):

```sh
ddev exec drush php:script scripts/maintenance/verify-show-scheduler.php
```

Scheduler's `scheduler_settings` wrapper must be visible in the Show form
display, in addition to the `publish_on` and `unpublish_on` widgets. Merely
checking widget presence in the form array does not establish visibility.

With `lkb_show_editor` enabled, the same scheduler rendering check expects
standalone date/time fields directly below Song list, without a collapsible
wrapper. It also verifies that Scheduler permission restrictions are preserved.

Read-only targeted drift and Show dropdown diagnosis:

```sh
vendor/bin/drush php:script scripts/maintenance/config-drift.php
```

Compares the reported backup/Show/Klaro/Entries/song-form configurations by
property, including mapping order. Credential properties are redacted, long
values summarised and nonempty callback bodies omitted. Also reports whether
Show editor/filter code is available and whether a new unsaved Show offers
closed forms. It temporarily switches the CLI account to admin to build that
form, restores the account afterwards, and saves no content/configuration.
