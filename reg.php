<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Educational Platform</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>

    <style>
       

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
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
        <h2>Registration</h2>

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

    

            <!-- Add other required fields as needed -->

            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>
