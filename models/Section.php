<?php

namespace Fuascailtdev\LmsPlugin\Models;

use Model;

class Section extends Model
{
    protected $table = 'lms_sections';

    protected $fillable = [
        'name',
        'category_id',
        'description',
    ];

    public $belongsTo = [
        'category' => 'OctoberCMS\LmsPlugin\Models\Category',
    ];

    public $hasMany = [
        'courses' => 'OctoberCMS\LmsPlugin\Models\Course',
    ];
}