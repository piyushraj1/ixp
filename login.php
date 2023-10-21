<?php
require_once 'config.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row["password"];

            if (password_verify($password, $storedPassword)) {
                //HERE I HAVE SET COOKIES FOR REMEMBER ME FUNCTIONALITY
                    // setcookie("remember_username", $username, time() + 3600);
        

                //to check it is previously logged in or not
                $_SESSION["logged_in"] = true;
                $_SESSION["username"] = $username;
                
                header("Location: index.php");
                exit();
            } else {
                echo '<script>alert("incorrect details.");</script>';
                
            }
        } else {
            echo '<script>alert("Username not found. Please register first.");</script>';
            header("Location: register.php");
        }
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="main">
        <h2>Login To Continue</h2>
        <form action="login.php" method="post" onsubmit="startAnimation(event)">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>


            <input type="submit" value="Login">
            <a href="register.php">New here?</a>
        </form>
    </div>
</body>
</html>
