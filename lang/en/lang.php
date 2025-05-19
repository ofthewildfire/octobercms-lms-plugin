<?php

return [
    'plugin' => [
        'name' => 'LMS Plugin',
        'description' => 'A simple Learning Management System for OctoberCMS with role-based access.',
    ],
    'categories' => [
        'title' => 'Categories',
        'description' => 'Manage categories for organizing sections and courses.',
    ],
    'sections' => [
        'title' => 'Sections',
        'description' => 'Manage sections under each category.',
    ],
    'courses' => [
        'title' => 'Courses',
        'description' => 'Manage courses within sections.',
    ],
    'lessons' => [
        'title' => 'Lessons',
        'description' => 'Manage lessons within courses.',
    ],
    'roles' => [
        'admin' => 'Administrator',
        'teacher' => 'Teacher',
        'student' => 'Student',
    ],
    'dashboard' => [
        'enrollments' => 'Your Enrollments',
        'no_enrollments' => 'You have not enrolled in any courses yet.',
    ],
    'messages' => [
        'course_added' => 'Course has been successfully added.',
        'lesson_added' => 'Lesson has been successfully added.',
        'category_added' => 'Category has been successfully added.',
        'section_added' => 'Section has been successfully added.',
    ],
];