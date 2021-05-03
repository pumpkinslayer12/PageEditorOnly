<?php

namespace PageEditorOnly;

class PageEditorOnlyRole
{
    private const pageEditorOnlyRoleSlug = 'pageEditorOnly';
    public const pageEditorOnlyRoleIdentifier = self::pageEditorOnlyRoleSlug . 'Role';
    private const pageEditorRoleName = 'Page Editor';
    private const pageEditorPermissions = [
        'read' => true,
        'edit_published_pages' => true,
        'edit_pages' => true,
        'upload_files' => true,
        'publish_pages' => true,
        'unfiltered_html' => true
    ];
    public function addPageEditorOnlyRole()
    {
        if (!wp_roles()->is_role(self::pageEditorOnlyRoleIdentifier)) {
            add_role(
                self::pageEditorOnlyRoleIdentifier,
                self::pageEditorRoleName,
                self::pageEditorPermissions
            );
        }
    }

    public function removePageEditorOnlyRole()
    {

        remove_role(self::pageEditorOnlyRoleIdentifier);
    }
}
