<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST["student_name"];
    $registration_number = $_POST["registration_number"];
    $department = $_POST["department"];
    $time_slot = $_POST["time_slot"];
    $subject = $_POST["subject"];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO appointments (student_name, registration_number, department, time_slot, subject) VALUES ('$student_name', '$registration_number', '$department', '$time_slot', '$subject')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment request submitted successfully!";
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
    <title>Book Appointment</title>
    <link rel="stylesheet" href="hod.css">
</head>

<body>

    <section id="uni-booking">
       
       <h2>Schedule A Meeting With HOD's</h2>
       
       <div class="request-form">
<form id="service-request-form" method="POST" action="hod.php">
   <div class="form-row">
       <div class="form-column">
       <label for="student_name">Your Name:</label>
        <input type="text" id="student_name" name="student_name" required>
       </div>
       <div class="form-column">
           <label for="registration_number">Registration No.</label>
           <input type="text" id="registration_number" name="registration_number" required>
       </div>
   </div>

   <div class="form-row">
       <div class="form-column">
           <label for="room">Select Department:</label>
           <select id="department" name="department" required>
               <option value="Computer Science">Computer Science</option>
               <option value="Mechanical">Mechanical</option>
               <option value="Civil">Civil</option>
               <option value="Polytechnic">Polytechnic</option>
               <option value="MCA">MCA</option>
           </select>
       </div>
   </div>

   <div class="form-row">
       <div class="form-column">
           <label for="time_slot">Meeting Slot:</label>
           <input type="datetime-local" id="time_slot" name="time_slot" required>
       </div>
   </div>

   <label for="message">Topic:</label>
   <textarea id="message" name="subject" placeholder="Write something.." style="max-height: 40px; max-width: 90%;"></textarea>

   <button type="submit" class="requestbtn">Submit Request</button>
</form>
</div>
</section>
</body>

</html>