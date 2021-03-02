=== Page Editor Only ===
Contributors: pumpkinslayer12
Tags: page,editor,custom
Requires at least: 1.0
Tested up to: 5.6.2
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Adds custom role that can only edit their pages.

== Description ==
WordPress plugin that creates a user that is only able to edit their own pages. Meant to segment subject matter experts to only specific pages on a WordPress installation.
## What it Actually Does
Creates a custom role called ***PageEditorOnlyRole***. This role has the following permissions:
- read
- edit_pages
- edit_published_pages
- publish_pages
- upload_files

There is also a filter that removes several group links for users that do not have the edit_others_pages permission from the edit page views. This is an aesthetic adjustment as the role cannot edit the pages of others. The following group links are removed.:
- all
- publish
- trash

The role is deleted on uninstall.

== Changelog ==

= 1.0 =
* Initial plugin release.
