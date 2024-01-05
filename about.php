<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Educational Platform</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>

    <style>
        /* Your existing CSS styles */

       

        #team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .team-member {
            flex-basis: 300px;
            margin: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            text-align: center;
        }

        .team-member img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Your existing tab switching JavaScript code
        });
    </script>
    
</head>
<body>
    <header>
        <!-- Your existing header content -->
        <h1>Educational Platform</h1>
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
        <h2>About Us</h2>

        <p>Welcome to our Educational Platform! We are dedicated to providing quality education and learning resources for students around the world.</p>

        <h3>Our Team</h3>

        <div id="team-members">
            <div class="team-member">
                <img src="placeholder-image.jpg" alt="Team Member 1">
                <h4>John Doe</h4>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="placeholder-image.jpg" alt="Team Member 2">
                <h4>Jane Smith</h4>
                <p>Head of Education</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>
</body>
</html>
