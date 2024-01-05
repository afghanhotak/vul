<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="login-container">
    <h2>Login Page</h2>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Login" name="submit">
    </form>
</div>

</body>
</html>

<?php
$host_name = "localhost";
$db_name = "hotak12";
$username = "admin";
$password = "password";

$conn = new mysqli($host_name, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: index.php");
      

    } 
    
    else {
        
        echo "Invalid username or password.";
    }

    $conn->close();
}
?>