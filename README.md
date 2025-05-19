# OctoberCMS LMS Plugin

## Overview
The OctoberCMS LMS Plugin is a simple Learning Management System (LMS) designed to facilitate online learning. It allows for the management of categories, sections, courses, and lessons, with role-based access for users including students, teachers, and administrators.

## Features
- **Categories**: Organize your courses into categories.
- **Sections**: Group related courses within a category.
- **Courses**: Create and manage courses that contain lessons.
- **Lessons**: Develop lessons that can be accessed by enrolled students.
- **Role-Based Access**: Different user roles (admin, teacher, student) with specific permissions.

## Structure
The plugin follows a hierarchical structure:
- **Categories**: Can have multiple sections.
- **Sections**: Can contain multiple courses.
- **Courses**: Can include multiple lessons.

## User Roles
- **Admin**: Full access to all functionalities.
- **Teacher**: Can add lessons to courses and manage their content.
- **Student**: Can enroll in courses and view their enrollments on their dashboard.

## Installation
1. Download the plugin from the marketplace.
2. Place the plugin folder in the `plugins` directory of your OctoberCMS installation.
3. Run the migration script to create necessary database tables.
4. Configure user roles using the Rainlabs Users plugin.

## Usage
- After installation, navigate to the backend to manage categories, sections, courses, and lessons.
- Frontend components can be used to display the LMS content to users based on their roles.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This plugin is licensed under the MIT License. See the LICENSE file for more details.# octobercms-lms-plugin
