<?php

namespace PageEditorOnly;

class Filters
{
    public function addFilters()
    {
        (new FilterLinksFromPageEditScreen)->addFilterLinksFromPageEditScreen();
    }

    public function removeFilters()
    {
        (new FilterLinksFromPageEditScreen)->removeFilterLinksFromPageEditScreen();
    }
}
