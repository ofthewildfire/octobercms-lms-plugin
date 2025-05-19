<?php

namespace OctoberCMS\LmsPlugin\Components;

use Cms\Classes\ComponentBase;
use OctoberCMS\LmsPlugin\Models\Lesson;

class Lessons extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Lessons Component',
            'description' => 'Handles the display and interaction with lessons.'
        ];
    }

    public function onRun()
    {
        $this->page['lessons'] = $this->loadLessons();
    }

    protected function loadLessons()
    {
        return Lesson::all();
    }
}