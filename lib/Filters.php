<?php

namespace PageEditorOnly;

class Filters
{
    public function addFilters()
    {
        (new FilterLinksFromPageEditScreen)->addFilterLinksFromPageEditScreen();
        (new FilterAdditionalMetaCapabilities)->addFilterAdditionalMetaCapabilities();
    }

    public function removeFilters()
    {
        (new FilterLinksFromPageEditScreen)->removeFilterLinksFromPageEditScreen();
        (new FilterAdditionalMetaCapabilities)->removeFilterAdditionalMetaCapabilities();
    }
}
