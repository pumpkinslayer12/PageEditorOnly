<?php

namespace PageEditorOnly;

class FilterAdditionalMetaCapabilities
{

    private const AdditionalCapability = 'unfiltered_html';
    private const MapMetaCapabilitySlug = 'map_meta_cap';
    private const FilterCallback = 'addMetaCapabilities';


    public function addMetaCapabilities($caps, $cap, $user_id)
    {

        if (self::AdditionalCapability === $cap && user_can($user_id, PageEditorOnlyRole::pageEditorOnlyRoleIdentifier)) {
            $caps = array(self::AdditionalCapability);
        }
        return $caps;
    }

    public function addFilterAdditionalMetaCapabilities()
    {
        if (!has_filter(
            self::MapMetaCapabilitySlug,
            array($this, self::FilterCallback)
        )) {
            add_filter(self::MapMetaCapabilitySlug, array($this, self::FilterCallback), 10, 3);
        }
    }

    public function removeFilterAdditionalMetaCapabilities()
    {
        remove_filter(self::MapMetaCapabilitySlug, array($this, self::FilterCallback), 10, 3);
    }
}
