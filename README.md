# Page Editor Only
WordPress plugin that creates a user that is only able to edit their own pages. Meant to segment subject matter experts to only specific pages on a WordPress installation.
## What it Actually Does
Creates a custom role called ***PageEditorOnlyRole***. This role has the following permissions:
- read
- edit_pages
- edit_published_pages
- publish_pages
- upload_files

There is also a filter that removes several group links for users that do not have the edit_others_pages permission from the edit page views. This is an aesthetic adjustment as the role cannot edit the pages of others. The following group links are removed:
- all
- publish
- trash

The role is deleted on uninstall.

