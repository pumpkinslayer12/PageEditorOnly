<?php

namespace PageEditorOnly;

if (defined('WP_UNINSTALL_PLUGIN')) {
    require_once('PageEditorOnly.php');
    remove_role(PageEditorOnlyDataStructure::pageEditorOnlyRoleIdentifier);
    remove_filter('views_edit-page', 'filterLinksFromPageEditScreen');
}
