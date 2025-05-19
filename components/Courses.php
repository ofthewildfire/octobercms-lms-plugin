<?php

namespace OctoberCMS\LMSPlugin\Components;

use Cms\Classes\ComponentBase;
use OctoberCMS\LMSPlugin\Classes\CourseManager;

class Courses extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Courses',
            'description' => 'Displays a list of courses and allows interaction with them.'
        ];
    }

    public function onRun()
    {
        $this->page['courses'] = $this->loadCourses();
    }

    protected function loadCourses()
    {
        $courseManager = new CourseManager();
        return $courseManager->getAllCourses();
    }
}