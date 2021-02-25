<?php

namespace PageEditorOnly;

if (defined('WP_UNINSTALL_PLUGIN')) {
    require_once('Loader.php');
    Loader::loadLibraries();
    (new Roles)->removeRoles();
    (new Filters)->removeFilters();
}
