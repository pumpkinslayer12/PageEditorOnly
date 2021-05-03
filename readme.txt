=== Page Editor Only ===
Contributors: pumpkinslayer12
Tags: page,editor,custom
Requires at least: 1.0
Requires PHP: 5.6
Tested up to: 5.7.1
Stable tag: 1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Adds custom role that can only edit their pages.

== Description ==
Creates a custom role called ***PageEditorOnlyRole***. The goal is to allow them to edit only pages they own. This role has the following permissions:
- read
- edit_pages
- edit_published_pages
- publish_pages
- upload_files
- unfiltered_html

The role is deleted on deactivation.

== Changelog ==

= 1.2 =
Modified behavior to re-add 'unfiltered_html' capability as it is removed on multisite. Without this capability, block editor escapes content.

= 1.1 =

Adds "unfiltered_html" capability to allow for proper content editing. Without, some blocks will be escaped along with social media embeds, such as a YouTube video.

= 1.0 =

Initial release.
== Upgrade Notice ==

= 1.2 =
Modified behavior to re-add 'unfiltered_html' capability as it is removed on multisite. Without this capability, block editor escapes content.

= 1.1 =

Adds "unfiltered_html" capability to allow for proper content editing. Without, some blocks will be escaped along with social media embeds, such as a YouTube video.

= 1.0 =

Initial release.
