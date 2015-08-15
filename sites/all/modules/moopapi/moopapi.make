; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.
core = 6.x
; API version
; ------------
; Every makefile needs to declare it's Drush Make API version. This version of
; drush make uses API version `2`.
api = 2

; Dependencies.
projects[autoload][overwrite] = TRUE
projects[autoload][version] = 2.x-dev

; Patch for Autoload long-standing issue.
projects[autoload][patch][] = "http://drupal.org/files/issues/1238562-1-autoload_file_scan_directory_fix.patch"
projects[autoload][patch][] = "http://drupal.org/files/autoload-943168-remove_defaults_for_fields_in_primary_key-14.patch"
