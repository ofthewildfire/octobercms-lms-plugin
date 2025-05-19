<?php

namespace OctoberCMS\LmsPlugin\Components;

use Cms\Classes\ComponentBase;
use OctoberCMS\LmsPlugin\Classes\CategoryManager;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Categories',
            'description' => 'Displays a list of categories for the LMS.'
        ];
    }

    public function onRun()
    {
        $this->page['categories'] = $this->listCategories();
    }

    protected function listCategories()
    {
        $categoryManager = new CategoryManager();
        return $categoryManager->getAllCategories();
    }
}