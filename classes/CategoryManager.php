<?php

namespace OctoberCMS\LMSPlugin\Classes;

use OctoberCMS\LMSPlugin\Models\Category;

class CategoryManager
{
    public function createCategory($data)
    {
        $category = new Category();
        $category->fill($data);
        $category->save();
        return $category;
    }

    public function updateCategory($id, $data)
    {
        $category = Category::find($id);
        if ($category) {
            $category->fill($data);
            $category->save();
        }
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return true;
        }
        return false;
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }
}