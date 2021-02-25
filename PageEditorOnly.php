<?php

namespace PageEditorOnly;
/*
* Plugin Name: Page Editor Only User
* Description: Creates a custom user that can create and edit only their pages.
* Version: 1.0
* License: GPL v3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

require_once('Loader.php');
Loader::loadLibraries();
(new Roles)->addRoles();
(new Filters)->addFilters();
