<?php

namespace Fuascailtdev\LMSPlugin\Models;

use Model;

class Course extends Model
{
    protected $table = 'lms_courses';

    protected $fillable = [
        'name',
        'description',
        'section_id',
        'created_by',
        'updated_by',
    ];

    public $belongsTo = [
        'section' => 'OctoberCMS\LMSPlugin\Models\Section',
    ];

    public $hasMany = [
        'lessons' => 'OctoberCMS\LMSPlugin\Models\Lesson',
    ];

    public $belongsToMany = [
        'students' => [
            'RainLab\User\Models\User',
            'table' => 'lms_course_user',
            'pivot' => ['enrollment_date'],
        ],
    ];
}