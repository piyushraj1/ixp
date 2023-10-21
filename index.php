<?php
require_once 'config.php';

if (isset($_COOKIE["remember_username"])) {
    $storedUsername = $_COOKIE["remember_username"];
    $_SESSION["logged_in"] = true;
    $_SESSION["username"] = $storedUsername;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Pool</title>
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
                <img src="./Images/logo2.png" alt="">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#service">Resources</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#feature">About</a></li>
                    <?php
                    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                    echo '<li><a href="logout.php">Sign Out</a></li>';
                    echo "<h4>Welcome";
                        if (isset($_SESSION["recognized_user"]) && $_SESSION["recognized_user"] === true) {
                        echo " back";
                        }
                        echo ", " . $_SESSION["username"] . "!</h4>";
                    $cookie_name = "username";
                    $cookie_value = $_SESSION["username"];
                    $cookie_expiration = time() + 20; // value  in seconds
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
                    } else {
                    echo '<li><a href="login.php">Login</a></li>';
                    }

                    ?>

                </ul>
            </nav>
        </div>
        <video autoplay muted loop>
            <source src="./Images/bgvedio.mp4" type="video/mp4">
        </video>


        <div class="home-content">
            <div class="home-text">
                <h1>Resource Pool</h1>
                <p>Find Essential On Our Platform</p>
                <div class="home-buttons">
                    <a href="#booking">Book Now</a>
                    <a href="listing.php">Request Service</a>
                </div>
            </div>
            <div class="button-container">
                <div class="left-arrow toggle-button">&#8592;</div>
                <div class="hidden-buttons">
                    <a href="hod.php">➡️HOD Appointment</a>
                    <a href="#booking">➡️Hospital Appointment</a>
                    <a href="#booking">➡️Book Food Court</a>
                    <a href="hotelbook.php">➡️Book Hotel</a>
                </div>
                <div class="right-arrow toggle-button">&#8594;</div>
            </div>
            <!-- javascript for menu button toggle -->
            <script>
                $(document).ready(function() {
                    let buttonsVisible = false; // Initially, buttons are hidden

                    $('.left-arrow').click(function() {
                        if (!buttonsVisible) {
                            $('.hidden-buttons').show();
                            buttonsVisible = true;
                            $('.left-arrow').hide();
                            $('.right-arrow').show();
                        }
                    });

                    $('.right-arrow').click(function() {
                        if (buttonsVisible) {
                            $('.hidden-buttons').hide();
                            buttonsVisible = false;
                            $('.right-arrow').hide();
                            $('.left-arrow').show();
                        }
                    });
                });
            </script>


        </div>

    </section>
    <!--------Home ends here-------->

    <!--------services starts here-------->
    <section id="service">
        <div class="title-text">
            <p>Resources</p>
            <h1>We Provide In Campus</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="./Images/unihotel banner.jpg">
                <div class="ovrelay"></div>
                <div class="services-desc">
                    <h3>UNI Hotel Booking</h3>
                    <hr>
                    <p>Make your travel dreams a reality with our hassle-free, one-click hotel booking platform. We offer a seamless experience, allowing you to secure your ideal accommodation effortlessly, ensuring a comfortable and stress-free stay awaits you.</p>
                    <a href="hotelbook.php"><button class="bookbtn">Book Now</button></a>

                </div>
            </div>
            <div class="single-service">
                <img src="./Images/food court.jpg">
                <div class="ovrelay"></div>
                <div class="services-desc">
                    <h3>Food Court</h3>
                    <hr>
                    <p>Elevate your dining experience with our restaurant booking platform. Discover the perfect place for your next culinary adventure, whether it's a cozy corner or an elegant setting. With a single click, reserve your table at top-rated eateries, ensuring a memorable and hassle-free dining experience that suits your taste and ambiance preferences.</p>
                    <a href="#booking"><button class="bookbtn">Book Now</button></a>
                </div>
            </div>

            <div class="single-service">
                <img src="./Images/hospital banner.jpg">
                <div class="ovrelay"></div>
                <div class="services-desc">
                    <h3>UNI Hospital</h3>
                    <hr>
                    <p>Caring for your health has never been easier. With our hospital appointment booking page, you can seamlessly schedule medical consultations and procedures in just one click. Take control of your well-being, and access the expert care you need, with a straightforward, user-friendly platform that puts your health first.</p>

                    <a href="#booking"><button class="bookbtn">Book Now</button></a>
                </div>

            </div>

            <div class="single-service">
                <img src="./Images/appointment.jpg">
                <div class="ovrelay"></div>
                <div class="services-desc">
                    <h3>HOD Appointment</h3>
                    <hr>
                    <p>Streamline your academic journey with our Head of Department (HOD) appointment page. Our easy-to-use platform lets you schedule meetings and consultations with department heads effortlessly. Take advantage of this efficient tool to ensure your educational path is on the right track, as you connect with HODs to address your academic concerns and aspirations.
                    </p>

                    <a href="hod.php"><button class="bookbtn">Book Now</button></a>
                </div>
            </div>
        </div>
    </section>
    <!--------services ends here-------->

    <!--------features starts here-------->
    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
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
                        <p>You can pre book your appointment from home according to your convenience.</p>
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
                    <option value="Food Court">Food Court</option>
                    <option value="UNI Hospital">UNI Hospital</option>
                    <option value="Laundry">Laundry</option>
                </select>
                <label for="time-slot">Select a Time Slot:</label>
                <select id="time-slot" name="time_slot">
                    <option value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
                    <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                    <option value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
                    <option value="4:00 PM - 5:00 PM">4:00 PM - 5:00 PM</option>

                </select>
                <label for="payment-method">Select Payment Method:</label>
                <select id="payment-method" name="payment">
                    <option value="Cash">Cash</option>
                    <option value="UPI">UPI</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Credit Card">Credit Card</option>



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
            $dbname = "users";
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


            $headers = "From: thakur20012001@gmail.com";

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

    <div class="conn">
        <a id="toggleButton">Contact Us</a>
    </div>
    <div id="formContainer" class="hidden">
        <form action="index.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="query">Query:</label>
            <textarea id="query" name="query" rows="4" required></textarea><br>

            <input type="submit" name="submit" value="Submit">

            <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "users";

            $conn = new mysqli($hostname, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if (isset($_POST['submit'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $query = $_POST['query'];

                $sql = "INSERT INTO queries (name, email, query) VALUES ('$name', '$email', '$query')";
                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $conn->close();
            ?>

        </form>

    </div>

    <script>
        const toggleButton = document.getElementById("toggleButton");
        const formContainer = document.getElementById("formContainer");

        toggleButton.addEventListener("click", function() {
            if (formContainer.classList.contains("hidden")) {
                formContainer.style.right = "0";
                toggleButton.style.right = "205px";
                toggleButton.style.transition = "0.5s";
                formContainer.classList.remove("hidden");
            } else {
                formContainer.style.right = "-250px";
                toggleButton.style.right = "20px";
                formContainer.classList.add("hidden");
            }
        });
    </script>

    <!--------footer ends here-------->

    <div class="social-links">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-telegram"></i>
        <p><i class="far fa-copyright"></i> Made By Vikas Kumar for PHP CA</p>
    </div>

    <!-- Scroll-up button within the section -->
    <a id="scroll-up-button" onclick="scrollToTop()" style="display: none; position: fixed; bottom: 20px; right: 30px; z-index: 99; cursor: pointer; background-color: #428a7d; color: rgb(255, 255, 255); border: none; border-radius: 50%; padding: 12px;">↑</a>
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

</body>

</html>