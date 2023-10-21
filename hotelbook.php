<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $roomtype = $_POST["roomtype"];
    $guest = $_POST["guest"];
    $time_slot = $_POST["time_slot"];
    $payment = $_POST["payment"];
    $message = $_POST["message"];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO hotelbookings (name, email, roomtype, guest, time_slot, payment, message) VALUES ('$name', '$email', '$roomtype', '$guest', '$time_slot', '$payment', '$message')";

    if ($conn->query($sql) === TRUE) {
        // echo '<script>alert("Booking successful.");</script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: index.php");
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI Hotel Booking page</title>
    <link rel="stylesheet" href="hotelbook.css">

</head>

<body>
    <section id="uni-booking">
            <h2>Get Yourself A Stay</h2>          
            <div class="request-form">
    <form id="service-request-form" method="POST" action="hotelbook.php">
        <div class="form-row">
            <div class="form-column">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-column">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-column">
                <label for="room">Select Room Type:</label>
                <select id="rooms" name="roomtype" required>
                    <option value="AC Suite">AC Suite</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Cabana">Cabana</option>
                    <option value="Connected Room">Connected Room</option>
                </select>
            </div>
            <div class="form-column">
                <label for="guest">No. Of Guest:</label>
                <input type="text" id="guest" name="guest" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-column">
                <label for="time_slot">Check In Slot:</label>
                <input type="datetime-local" id="time_slot" name="time_slot" required>
            </div>
            <div class="form-column">
                <label for="payment-method">Select Payment Method:</label>
                <select id="payment-method" name="payment">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Cash">Cash</option>
                    <option value="UPI">UPI</option>
                </select>
            </div>
        </div>

        <label for="message">Any Specific req :</label>
        <textarea id="message" name="message" placeholder="Write something.." style="max-height: 40px; max-width: 90%;"></textarea>

        <button type="submit" class="requestbtn">Submit Request</button>
    </form>
</div>
</section>
</body>

</html>