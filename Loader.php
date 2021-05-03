<?php

namespace PageEditorOnly;

class Loader
{
    public static function loadLibraries()
    {
        $libraryPath = 'lib/';
        require_once($libraryPath . 'Filters.php');
        require_once($libraryPath . 'FilterLinksFromPageEditScreen.php');
        require_once($libraryPath . 'Roles.php');
        require_once($libraryPath . 'PageEditorOnlyRole.php');
        require_once($libraryPath . 'FilterAdditionalMetaCapabilities.php');
    }
}
