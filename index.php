
<?php
require_once 'config.php';

session_start();


if (!isset($_COOKIE['visit_count'])) {
    
    $visitCount = 1;
    setcookie('visit_count', $visitCount, time() + 3600);
} else {
    $visitCount = $_COOKIE['visit_count'] + 1;
    setcookie('visit_count', $visitCount, time() + 3600); 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insane X Productions</title>
    <link rel="icon" href="./Images/logo2.png" type="image/x-icon">

    <!-- stylesheet for main css file -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome cdn link for icons. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery file cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!--------Home starts here-------->

    <section class="home-container">
        <div class="navbar">
            <nav>
                <img src="./Images/insane.png" alt="">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#feature">About</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                </ul>
            </nav>
                </ul>
            </nav>
        </div>
        <video autoplay muted loop>
            <source src="./Images/bg1.mp4" type="video/mp4">
        </video>


        <div class="home-content">
            <div class="home-text">
                <h1>Insane X Productions</h1>
                <p>Your One Stop Solution</p>
                <div class="home-buttons">
                    <a href="#booking">Book Now</a>
                    <a href="listing.php">Request Service</a>
                </div>
            </div>


        </div>

    </section>
    <!--------Home ends here-------->

    <!--------services starts here-------->
    <section id="service">
        <div class="title-text">
            <p>Our Services</p>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="./Images/editing.jpg">
                <h2>Video Editing</h2>
            </div>
            <div class="single-service">
                <img src="./Images/graphic.jpg">
                <h2>Graphic Designing</h2>
            </div>

            <div class="single-service">
                <img src="./Images/website.jpg">
                <h2>Website Development</h2>

            </div>

            <div class="single-service">
                <img src="./Images/social.jpg">
                <h2>Social Media Management</h2>
            </div>
        </div>
    </section>
    <!--------services ends here-------->
    <!-- vedio embeded -->
    <section id="work">
    <div class="work-title">
        <p>Our Work</p>
    </div>
    <div class="work-box">
        <div class="work-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VCYwhQKALp8?si=9b9NvnPxXvvUIopt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="work-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0bRD0QscTtI?si=E6s5MkFhXvVM8_YY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="work-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dG6zqKtRlY8" title="Video Editing"></iframe>
        </div>
        <div class="work-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ursDgHUXqeU?si=EFquHvbljapM-S5q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="work-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QlAUfman0iQ?si=8y6v_ObcOoysF-dg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="work-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QClpQhWSSf0?si=HgHXTn4VZ0zcXixS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section>



    <!--------features starts here-------->
    <section id="feature">
        <div class="title-text">
            
            <h1>Why you choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Resource on Demand</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="feature-text">
                        <p>We got the best staff in the town to take care of your beautifull hair. We have vast Experienced hair stylist.</p>
                    </div>
                </div>

                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fas fa-check-square"></i>
                    </div>
                    <div class="feature-text">
                        <p>You can pre book your intment from home according to your convenience.</p>
                    </div>
                </div>

                <h1>Affordable Price</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <div class="feature-text">
                        <p>We provide our service at very reasonable price so you can give a treat to your hair without thinking twice.</p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="./Images/about.jpg">
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--------features ends here-------->

    <!--------booking starts here-------->
    <section id="booking">
    

        <h2>Book Our Services</h2>

        <div class="booking-form">
        
            <form id="service-booking-form" method="POST" action="index.php">
                <label for="service-select">Select a Service:</label>
                <select id="service-select" name="service">
                    <option value="Video Editing">Video Editing</option>
                    <option value="Graphic Designing">Graphic Designing</option>
                    <option value="Website Development">Website Development</option>
                    <option value="Social Media Marketing">Social Media Marketing</option>
                </select>
                <label for="time-slot">Select Deadline:</label>
                <select id="time-slot" name="time_slot">
                    <option value="9:00 AM - 10:00 AM">1 Day</option>
                    <option value="11:00 AM - 12:00 PM">2 Days</option>
                    <option value="2:00 PM - 3:00 PM">3 Days</option>
                    <option value="4:00 PM - 5:00 PM">Above 3 Days</option>

                </select>
                <label for="payment-method">Select Payment Method:</label>
                <select id="payment-method" name="payment">
                    <option value="Cash">Paypal</option>
                    <option value="UPI">UPI</option>
                    <option value="Debit Card">Bank Transfer</option>



                </select>
                <label for="user-name">Your Name:</label>
                <input type="text" id="user-name" name="user_name" required>
                <label for="user-email">Your Email:</label>
                <input type="email" id="user-email" name="user_email" required>
                <label for="user-phone">Phone Number:</label>
                <input type="text" id="user-phone" name="user_phone" required>
                <button type="submit" class="bookbtn">Book Now</button>
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $service = isset($_POST["service"]) ? $_POST["service"] : "";
            $timeSlot = isset($_POST["time_slot"]) ? $_POST["time_slot"] : "";
            $paymentMethod = isset($_POST["payment"]) ? $_POST["payment"] : "";
            $userName = isset($_POST["user_name"]) ? $_POST["user_name"] : "";
            $userEmail = isset($_POST["user_email"]) ? $_POST["user_email"] : "";
            $userPhone = isset($_POST["user_phone"]) ? $_POST["user_phone"] : "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "insane";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO booking_data (service, time_slot, payment_method, user_name, user_email, user_phone)
        VALUES ('$service', '$timeSlot', '$paymentMethod', '$userName', '$userEmail', '$userPhone')";


            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();


            $to = $userEmail;

            $subject = "Booking Receipt";

            $message = "Service: $service\n";
            $message .= "Time Slot: $timeSlot\n";
            $message .= "Payment Method: $paymentMethod\n";
            $message .= "User Name: $userName\n";
            $message .= "User Email: $userEmail\n";
            $message .= "User Phone: $userPhone\n";


            $headers = "From: insanexproductions2@gmail.com";

            if (mail($to, $subject, $message, $headers)) {

                echo '<script>alert("Booking receipt sent successfully.");</script>';
            } else {

                echo "Failed to send booking receipt.";
            }
        }
        ?>
    </section>

    <!--------booking ends here-------->

    <!--------Footer starts here-------->
    <section id="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="./Images/insane.png" alt="Company Logo">
        </div>
        <div class="company-description">
            <p>Your company description goes here. Tell people what you're all about!</p>
        </div>
        <div class="contact-details">
            <h3>Contact Details</h3>
            <p>Email: info@example.com</p>
            <p>Phone: +1 123-456-7890</p>
            <p>Address: Phagwara, Punjab</p>
        </div>
        <div class="social-links">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-telegram"></i>
        <p><i class="far fa-copyright"></i>Insane X Production-2023</p>
    </div>
    </div>
   
</section>
<!-- Dialogflow Chatbot Integration -->

<df-messenger
    intent="WELCOME"
    chat-title="InsaneXBot"
    agent-id="
piyush-iscl"
    language-code="en"
></df-messenger>


    <!--------footer ends here-------->

   

    <!-- Scroll-up button within the section -->
    <a id="scroll-up-button" onclick="scrollToTop()" style="display: none; position: fixed; bottom: 90px; right: 30px; z-index: 99; cursor: pointer; background-color: #e8c40f; color: rgb(255, 255, 255); border: none; border-radius: 50%; padding: 12px;">↑</a>
    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Show/hide scroll-up button based on scroll position
        window.onscroll = function() {
            var scrollUpButton = document.getElementById('scroll-up-button');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollUpButton.style.display = 'block';
            } else {
                scrollUpButton.style.display = 'none';
            }
        };
    </script>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
</body>

</html>