<?php

namespace Fuascailtdev\LMSPlugin\Classes;

use October\Rain\Database\Model;

class SectionManager
{
    protected $sectionModel;

    public function __construct()
    {
        $this->sectionModel = new \Fuascailtdev\LMSPlugin\Models\Section();
    }

    public function createSection($data)
    {
        return $this->sectionModel->create($data);
    }

    public function updateSection($id, $data)
    {
        $section = $this->sectionModel->find($id);
        if ($section) {
            $section->fill($data);
            $section->save();
            return $section;
        }
        return null;
    }

    public function deleteSection($id)
    {
        $section = $this->sectionModel->find($id);
        if ($section) {
            return $section->delete();
        }
        return false;
    }

    public function getSectionsByCategory($categoryId)
    {
        return $this->sectionModel->where('category_id', $categoryId)->get();
    }
}