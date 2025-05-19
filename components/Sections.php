<?php

namespace Fuascailtdev\LmsPlugin\Components;

use Cms\Classes\ComponentBase;
use Fuascailtdev\LmsPlugin\Models\Section;

class Sections extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Sections',
            'description' => 'Displays sections and their associated courses and lessons.'
        ];
    }

    public function onRun()
    {
        $this->page['sections'] = $this->loadSections();
    }

    protected function loadSections()
    {
        return Section::all();
    }
}