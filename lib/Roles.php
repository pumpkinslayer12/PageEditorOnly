<?php

namespace PageEditorOnly;

class Roles
{
    public function addRoles()
    {
        (new PageEditorOnlyRole)->addPageEditorOnlyRole();
    }

    public function removeRoles()
    {
        (new PageEditorOnlyRole)->removePageEditorOnlyRole();
    }
}
