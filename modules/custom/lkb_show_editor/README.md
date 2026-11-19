# LKB Show Editor

Show-only form presentation adjustment for Scheduler on Drupal 11.4+.

Enable with `drush pm:enable lkb_show_editor -y`, then rebuild caches. No database
schema, Composer dependency or data migration is required. The module is enabled
in exported `core.extension.yml`.

An explicitly ordered form hook runs after Scheduler and Field Layout. It turns
Scheduler's details wrapper into an unlabelled, non-collapsible container in the
same layout region as Song list, immediately after it. Publish on and Unpublish
on therefore appear as ordinary fields, with no Scheduling options heading.

The invisible container retains Scheduler's ID, attachments, access rules and
internal grouping. This preserves its default-time JavaScript, widget names,
validation, permissions and submit handling. It affects Show nodes only; other
content types and Scheduler's global settings are unchanged. Existing scheduled
times are never written by this module.

Read-only Gin rendering check:

```sh
ddev exec drush php:script scripts/maintenance/verify-show-scheduler.php
```

Checks add/edit field visibility and order, no collapsible ancestors, and hidden
controls for users without scheduling permission. Disable/uninstall this module
to restore Scheduler's standard details presentation; no content is deleted.

## Open Webform choices

Show's `field_song_list` select widget offers only forms currently accepting
submissions, using Webform's `isOpen()` check (including scheduled opening/closing
windows and archive status). Categories, widget configuration, access filtering,
empty selection and normal select validation are preserved. Other Webform
references are unaffected.

Exception for existing content: a currently selected closed/archived form stays
available on that Show only, labelled “current selection — closed”. This avoids
silently losing historical references on unrelated edits. Other closed forms
cannot be selected. No existing references or Webform statuses are modified.

Local transactional check:

```sh
ddev exec drush php:script scripts/maintenance/verify-show-webforms.php
```
