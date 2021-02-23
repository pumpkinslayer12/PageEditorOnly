<?php

namespace PageEditorOnly;

class PageEditorOnlyDataStructure
{
    const pageEditorOnlySlug = 'pageEditorOnly';
    const pageEditorOnlyRoleIdentifier = self::pageEditorOnlySlug . 'Role';
    const pageEditorRoleName = 'Page Editor';
    const pageEditorPermissions = [
        'read' => true,
        'edit_published_pages' => true,
        'edit_pages' => true,
        'upload_files' => true,
        'publish_pages' => true
    ];
}
