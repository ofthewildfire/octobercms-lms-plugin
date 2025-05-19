document.addEventListener('DOMContentLoaded', function() {
    // Check if user is logged in
    function isLoggedIn() {
        return !!document.querySelector('meta[name="user-id"]'); // Assuming user ID is stored in a meta tag
    }

    // Role-based access control
    function getUserRole() {
        return document.querySelector('meta[name="user-role"]').content; // Assuming user role is stored in a meta tag
    }

    // Function to enroll in a course
    function enrollInCourse(courseId) {
        if (!isLoggedIn()) {
            alert('You must be logged in to enroll in a course.');
            return;
        }

        const userRole = getUserRole();
        if (userRole !== 'student') {
            alert('Only students can enroll in courses.');
            return;
        }

        // AJAX request to enroll in the course
        fetch(`/enroll/course/${courseId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ courseId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Successfully enrolled in the course!');
            } else {
                alert('Failed to enroll in the course: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error enrolling in course:', error);
        });
    }

    // Function to add a lesson (for teachers)
    function addLesson(courseId, lessonData) {
        const userRole = getUserRole();
        if (userRole !== 'teacher' && userRole !== 'admin') {
            alert('Only teachers and admins can add lessons.');
            return;
        }

        // AJAX request to add the lesson
        fetch(`/add/lesson/${courseId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(lessonData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Lesson added successfully!');
            } else {
                alert('Failed to add lesson: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error adding lesson:', error);
        });
    }

    // Event listeners for buttons (example)
    document.querySelectorAll('.enroll-button').forEach(button => {
        button.addEventListener('click', function() {
            const courseId = this.dataset.courseId;
            enrollInCourse(courseId);
        });
    });

    document.querySelectorAll('.add-lesson-button').forEach(button => {
        button.addEventListener('click', function() {
            const courseId = this.dataset.courseId;
            const lessonData = {
                title: document.querySelector(`#lesson-title-${courseId}`).value,
                content: document.querySelector(`#lesson-content-${courseId}`).value
            };
            addLesson(courseId, lessonData);
        });
    });
});