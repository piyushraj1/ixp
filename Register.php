<?php
require_once 'config.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $name=$_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, username, password) VALUES ('$name' ,'$username', '$hashedPassword')";


        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>









<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="main">
        <h2>Create An Account</h2>
        <form action="register.php" method="post">

            <label for="username">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Register">
            <a href="login.php">Login Now !</a>
        </form>
    </div>

</body>

</html>