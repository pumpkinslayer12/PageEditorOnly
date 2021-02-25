<?php

namespace PageEditorOnly;

class FilterLinksFromPageEditScreen
{
    private const filterLinksFromPageEditScreenView = 'views_edit-page';
    private const filterLinksFromPageEditScreenExecutionPriority = 10;
    private const filterLinksFromPageEditScreenArguments = 1;

    public function addFilterLinksFromPageEditScreen()
    {
        if (!has_filter(
            self::filterLinksFromPageEditScreenView,
            array($this, 'filterLinksFromPageEditScreen')
        )) {
            add_filter(
                self::filterLinksFromPageEditScreenView,
                array($this, 'filterLinksFromPageEditScreen'),
                self::filterLinksFromPageEditScreenExecutionPriority,
                self::filterLinksFromPageEditScreenArguments
            );
        }
    }

    public function removeFilterLinksFromPageEditScreen()
    {
        if (defined('WP_UNINSTALL_PLUGIN')) {
            remove_filter(
                self::filterLinksFromPageEditScreenView,
                array($this, 'filterLinksFromPageEditScreen'),
                self::filterLinksFromPageEditScreenExecutionPriority,
                self::filterLinksFromPageEditScreenArguments
            );
        }
    }

    public function filterLinksFromPageEditScreen($links)
    {
        if (!current_user_can('edit_others_pages')) {
            unset(
                $links['all'],
                $links['publish'],
                $links['trash']
            );
        }
        return $links;
    }
}
