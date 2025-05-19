<?php

namespace Fuascailtdev\LMSPlugin\Classes;

use Fuascailtdev\LMSPlugin\Models\Course;

class CourseManager
{
    public function createCourse($data)
    {
        $course = new Course();
        $course->fill($data);
        $course->save();
        return $course;
    }

    public function updateCourse($id, $data)
    {
        $course = Course::find($id);
        if ($course) {
            $course->fill($data);
            $course->save();
        }
        return $course;
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete();
            return true;
        }
        return false;
    }

    public function getCourse($id)
    {
        return Course::find($id);
    }

    public function getAllCourses()
    {
        return Course::all();
    }
}