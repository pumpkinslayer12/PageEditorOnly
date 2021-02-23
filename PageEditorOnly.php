<?php

namespace PageEditorOnly;
/*
* Plugin Name: Page Editor Only User
* Description: Creates a custom user that can create and edit only their pages.
* Version: 1.0
* License: GPL v3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

require_once('PageEditorOnlyDataStructure.php');

register_activation_hook(__FILE__, function () {
    if (wp_roles()->is_role(PageEditorOnlyDataStructure::pageEditorOnlyRoleIdentifier))
        return;

    add_role(
        PageEditorOnlyDataStructure::pageEditorOnlyRoleIdentifier,
        PageEditorOnlyDataStructure::pageEditorRoleName,
        PageEditorOnlyDataStructure::pageEditorPermissions
    );
});
function filterLinksFromPageEditScreen($views)
{
    if (!current_user_can('edit_others_pages'))
        unset($views['all'], $views['publish'], $views['trash']);
    return $views;
}
add_filter('views_edit-page', 'filterLinksFromPageEditScreen');
