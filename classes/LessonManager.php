<?php

namespace OctoberCMS\LMSPlugin\Classes;

use OctoberCMS\LMSPlugin\Models\Lesson;

class LessonManager
{
    public function createLesson($data)
    {
        $lesson = new Lesson();
        $lesson->fill($data);
        $lesson->save();
        return $lesson;
    }

    public function updateLesson($id, $data)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $lesson->fill($data);
            $lesson->save();
        }
        return $lesson;
    }

    public function deleteLesson($id)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $lesson->delete();
            return true;
        }
        return false;
    }

    public function getLesson($id)
    {
        return Lesson::find($id);
    }

    public function getAllLessons()
    {
        return Lesson::all();
    }
}