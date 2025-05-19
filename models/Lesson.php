<?php

namespace Fuascailtdev\LmsPlugin\Models;

use Model;

class Lesson extends Model
{
    protected $table = 'lms_lessons';

    protected $fillable = [
        'title',
        'content',
        'course_id',
        'order',
    ];

    public $belongsTo = [
        'course' => 'OctoberCMS\LmsPlugin\Models\Course',
    ];

    public $timestamps = true;

    public function getLessonsByCourse($courseId)
    {
        return self::where('course_id', $courseId)->orderBy('order')->get();
    }
}