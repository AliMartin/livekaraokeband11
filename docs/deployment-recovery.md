# Recovering production after module code was removed before uninstall

Prepared 19 November 2026. These are production recovery instructions, not a
record of completed production actions. The reported missing modules are AI,
its editorial/provider/logging modules, Key and Webform Content Creator.

The deployed Composer files intentionally exclude these packages, but production
still has them installed in its database. Local uninstalls did not alter that
database. Restore compatible code temporarily, run normal uninstalls, then
restore the deployed Composer files. Do not bypass the requirements check or
manually delete `core.extension` entries, which skips uninstall cleanup.

Run from the production project root. Run each block only after the preceding
block completes successfully. Keep the recovery directory path for later use.
If any block fails, stop and retain the restored module code until diagnosed.

## Back up

Use a current hosting backup of database and files. Additionally, preserve the
currently deployed manifests/README and take a private SQL dump:

```sh
lkb_recovery_dir="$(mktemp -d "$HOME/lkb-recovery.XXXXXX")"
cp composer.json composer.lock README.md "$lkb_recovery_dir/"
vendor/bin/drush sql:dump --gzip --result-file="$lkb_recovery_dir/before-recovery.sql"
```

If Drush cannot dump this installation, use hosting/phpMyAdmin backup first.
Do not proceed without a restorable production database backup. This production
backup is distinct from the local DDEV backups.

## Temporarily restore module packages

The following versions are taken from the saved pre-removal local lockfile;
they are compatible with the local Drupal 11.4.13 installation. Composer must
validate compatibility with the actual deployed dependency set. Do not add
`--ignore-platform-reqs` or a blanket dependency-update flag to force a conflict.

```sh
composer require \
  drupal/ai:1.5.2 \
  drupal/ai_provider_openai:1.2.5 \
  drupal/ai_content_suggestions:1.5.3 \
  drupal/ai_logging:1.3.4 \
  drupal/key:1.23.0 \
  drupal/webform_content_creator:4.0.14 \
  --no-interaction
```

This intentionally changes manifests temporarily. ai_ckeditor is supplied inside
the AI package; it is not a separate Composer package.

## Uninstall while code exists

```sh
vendor/bin/drush cr
vendor/bin/drush pm:uninstall ai_ckeditor ai_content_suggestions ai_logging ai_provider_openai ai key webform_content_creator -y
```

This removes the old AI configuration/key/logging and Content Creator mappings
as previously authorised. Drupal's AI CKEditor uninstall hook cleans its editor
controls. Existing audience submission data is not removed by these module
uninstalls. If production has any additional enabled modules depending on these,
review Drush's dependency/error output before proceeding rather than deleting
module entries manually.

## Return to deployed dependency set

Only after the normal uninstalls succeed:

```sh
cp "$lkb_recovery_dir/composer.json" composer.json
cp "$lkb_recovery_dir/composer.lock" composer.lock
composer install --no-interaction
cp "$lkb_recovery_dir/README.md" README.md
vendor/bin/drush cr
vendor/bin/drush updb -y
```

The saved manifests above are the newly deployed intended versions, not the
pre-removal historical ones. Restoring them avoids committing temporary package
requirements or accidentally resolving unrelated versions. Restoring README
retains the project maintenance link after Composer scaffolding.

## Continue configuration deployment

Run `vendor/bin/drush cim` interactively and inspect its proposed changes before
confirming. The accumulated deployment intentionally installs the new custom
archive/editor modules, deletes the old analysis/Daisuke views and Song analysis
form, removes Show CRM field configuration, and changes relevant form displays.
Other pre-existing active/exported drift was identified locally; an unreviewed
full import can overwrite unrelated production configuration. If the import
fails, retain its exact output for diagnosis; do not force it.

After a successful, reviewed import:

```sh
vendor/bin/drush cr
```

Then follow the module READMEs/maintenance log to backfill surviving current song
requests and verify production Show forms, live banner, song submission/archive,
CSV access and scheduling. Field data purge is separate from configuration
removal; use the documented Show cleanup process if immediate purge is required.
Do not run rolled-back fixture integration tests on live production.

Reference: Drupal's official missing-module troubleshooting explains restoration
of compatible missing module code:
https://www.drupal.org/docs/updating-drupal/troubleshooting-database-updates

## Reported follow-up: Song analysis submissions block import

The owner reported temporary code restoration, module uninstalls, dependency
restoration and database updates completed without errors. Configuration import
then stopped because the deleted `song_analysis` Webform still contains
submissions on production. This is a config import validation failure, not an
indication that those submissions have already been deleted.

The owner previously authorised deleting this obsolete form and its archive.
After a fresh private production SQL backup, delete exactly that Webform through
Drupal's entity API (which also deletes its submissions), then retry import:

```sh
lkb_archive_backup_dir="$(mktemp -d "$HOME/lkb-archive-backup.XXXXXX")"
vendor/bin/drush sql:dump --gzip --result-file="$lkb_archive_backup_dir/before-song-analysis-delete.sql"
vendor/bin/drush php:eval '\Drupal::entityTypeManager()->getStorage("webform")->load("song_analysis")?->delete();'
vendor/bin/drush cr
vendor/bin/drush cim
vendor/bin/drush cr
```

Run each command separately and stop on errors. This targets the obsolete
`song_analysis` form only, not `song_request_*` forms or the new independent
archive table. A backup is necessary to recover deleted legacy submissions;
restoring YAML alone does not restore them. Production execution/result of this
follow-up has not yet been confirmed.
