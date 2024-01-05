<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Platform</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
 //this is start           
// Your existing tab switching JavaScript code
            
document.addEventListener('DOMContentLoaded', function () {
    // Get all the tab links
    var tabLinks = document.querySelectorAll('nav a');

    // Get all the sections (content) corresponding to the tabs
    var sections = document.querySelectorAll('section');

    // Add click event listeners to the tab links
    tabLinks.forEach(function (tabLink) {
        tabLink.addEventListener('click', function (event) {
            event.preventDefault();

            // Remove the 'active' class from all tab links
            tabLinks.forEach(function (link) {
                link.classList.remove('active');
            });

            // Add the 'active' class to the clicked tab link
            tabLink.classList.add('active');

            // Hide all sections
            sections.forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the corresponding section based on the clicked tab
            var targetSectionId = tabLink.getAttribute('href').substring(1);
            var targetSection = document.getElementById(targetSectionId);

            if (targetSection) {
                targetSection.style.display = 'block';
            }
        });
    });
});
//this is end            

            // Sample course data (replace with your actual data)
            var courses = [
                {
                    title: 'Introduction to Programming',
                    description: 'Learn the basics of programming with this introductory course.'
                },
                {
                    title: 'Web Development Fundamentals',
                    description: 'Explore the essentials of web development and design.'
                },
                {
                    title: 'Data Science with Python',
                    description: 'Dive into data science using Python and popular libraries.'
                },
                // Add more courses as needed
            ];

            // Function to display course details
            function displayCourseDetails(courseIndex) {
                var courseDetails = document.getElementById('course-details');
                courseDetails.innerHTML = '<h2>' + courses[courseIndex].title + '</h2>' +
                                           '<p>' + courses[courseIndex].description + '</p>';
            }

            // Add click event listeners to course links
            var courseLinks = document.querySelectorAll('.course-link');
            courseLinks.forEach(function (courseLink, index) {
                courseLink.addEventListener('click', function (event) {
                    event.preventDefault();
                    displayCourseDetails(index);
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <!-- Your existing header content -->
        <header>
        <h1>Educational Platform</h1>
    </header>
    </header>

    <nav>
        <!-- Your existing navigation content -->
        <a href="index.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="about.php">About</a>
        <a href="reg.php">Registration</a>
        <a href="search.php">Search</a>
    </nav>

    <section>
        <h2>Courses</h2>

        <ul>
            <li><a href="#" class="course-link">Introduction to Programming</a></li>
            <li><a href="#" class="course-link">Web Development Fundamentals</a></li>
            <li><a href="#" class="course-link">Data Science with Python</a></li>
            <!-- Add more course links as needed -->
        </ul>

        <div id="course-details">
            <!-- Course details will be displayed here -->
        </div>
    </section>
</body>
</html>
