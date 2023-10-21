<?php
require_once 'config.php';
$alertMessage = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $servicesNeeded = $_POST["services_needed"];

    if (empty($name) || empty($email) || empty($servicesNeeded)) {
        $alertMessage = "Error: Please fill out all the fields.";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO service_requests (name, email, services_needed) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $servicesNeeded);

        if ($stmt->execute()) {
            $alertMessage = "Service request submitted successfully! We will contact you soon.";
            header("Location: index.php");
        } else {
            $alertMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listing.css">
    
</head>
<body>
<section id="service-request">
    <div class="title-text">
        <img src="./Images/logo2.png" alt="">
        
        <h2>Request Additional Services</h2>
    </div>
    <div class="request-form">
        <form id="service-request-form" method="POST" action="listing.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="service-needed">Service You Want:</label>
            <input type="text" id="service-needed" name="services_needed" required></input>

            <button type="submit" class="requestbtn">Submit Request</button>
        </form>
    </div>


</section>

</body>
</html>
