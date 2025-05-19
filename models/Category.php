<?php

namespace OctoberCMS\LMSPlugin\Models;

use Model;

class Category extends Model
{
    protected $table = 'lms_categories';

    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = true;

    public function sections()
    {
        return $this->hasMany('OctoberCMS\LMSPlugin\Models\Section');
    }
}