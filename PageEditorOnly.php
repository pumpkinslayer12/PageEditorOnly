<?php

namespace PageEditorOnly;
/*
* Plugin Name: Page Editor Only User
* Description: Creates a custom user that can create and edit only their pages.
* Version: 1.2
* License: GPL v3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

require_once('Loader.php');
Loader::loadLibraries();
(new Roles)->addRoles();
(new Filters)->addFilters();

register_deactivation_hook(__FILE__, function () {
    require_once('Loader.php');
    Loader::loadLibraries();
    (new Roles)->removeRoles();
    (new Filters)->removeFilters();
});

add_filter('map_meta_cap', function ($caps, $cap, $user_id) {
    if ('unfiltered_html' === $cap && user_can($user_id, 'editor')) {
        $caps = array('unfiltered_html');
    }
    return $caps;
}, 10, 3);
