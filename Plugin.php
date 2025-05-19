<?php

namespace OctoberCMS\LMSPlugin;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'LMS Plugin',
            'description' => 'A simple LMS plugin for OctoberCMS with role-based access.',
            'author'      => 'Your Name',
            'icon'        => 'icon-graduation-cap'
        ];
    }

    public function registerComponents()
    {
        return [
            'OctoberCMS\LMSPlugin\Components\Categories' => 'lmsCategories',
            'OctoberCMS\LMSPlugin\Components\Sections' => 'lmsSections',
            'OctoberCMS\LMSPlugin\Components\Courses' => 'lmsCourses',
            'OctoberCMS\LMSPlugin\Components\Lessons' => 'lmsLessons',
        ];
    }

    public function registerSettings()
    {
        return [];
    }
}