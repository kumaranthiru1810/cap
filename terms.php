<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <title>garudaholidaystravels</title>

    <style>

    </style>
</head>

<body>
    <div class="container-fluid bg-container12">
        <div class="row">
            <div class="col-12">
                <div class="d-md-none">
                    <div class="header-container1 d-flex flex-row justify-content-between text-white mt-2">
                        <div>
                            <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                            <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i> garudaholidaystravels@gmail.com 
</p>
                        </div>
                        <div>
                            <p style="background: none; color:white;">
                            <?php if(isset($_SESSION['username'])){ ?>
                                <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');" style="color: white; text-decoration:none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                            <?php } else{ ?>
                                <a href="login.php" style="color: white; text-decoration:none;"><i class="fa-solid fa-user"></i>Login</a>
                             <?php } ?>                            
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="text-center">
                            <img src="./img/logo.png" alt="logo" />
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block header-container pr-5">
                    <div class="d-flex justify-content-between align-items-center mt-2 text-white">
                        <!-- Left section (Phone & Email) -->
                        <div class="d-flex flex-row ">
                            <div>
                            <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                            <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                        </div>&nbsp;&nbsp;&nbsp;
                            <div>
                                <p><i class="fa-solid fa-envelope"></i> garudaholidaystravels@gmail.com </p>
                            </div>
                        </div>

                        <!-- Center section (Logo) -->
                        <div class="d-flex flex-grow-1 justify-content-center mr-5">
                            <img src="./img/logo.png" alt="logo" class="img-fluid" style="max-width: 150px;" />
                        </div>

                        <!-- Right section (Login) -->
                        <div>
                            <p style="background: none; color:white;">
                            <?php if(isset($_SESSION['username'])){ ?>
                                <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');" style="color: white; text-decoration:none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                            <?php } else{ ?>
                                <a href="login.php" style="color: white; text-decoration:none;"><i class="fa-solid fa-user"></i>Login</a>
                             <?php } ?>                            
                            </p>
                        </div>
                    </div>
                </div><br />
                <nav class="navbar navbar-expand-lg navbar-custom m-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./traiff.php">Tariff</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./package.php">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./services.php">Services</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
    </a>
    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
        <a class="dropdown-item" href="services.php">Our Services</a>
        <a class="dropdown-item" href="#">Dindigul Junction</a>
        <a class="dropdown-item" href="#">Madurai Airport</a>
        <a class="dropdown-item" href="#">Trichy Airport</a>
        <a class="dropdown-item" href="#">Chennai Airport</a>
        <a class="dropdown-item" href="#">Taxi Service</a>
        <a class="dropdown-item" href="#">Van on Hire</a>
        <a class="dropdown-item" href="#">AC Tempo on Hire</a>
    </div>
</li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="./gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <a href="./book.php" class="btn btn-custom">
                        <img src="./img/nav-logo.png" alt="Car"> Book a Ride
                    </a>
                </nav>
            </div>
            <div class="col-12 text-center mt-5 pb-5 head-todo">
                <div>
                    <p class="text-white"><span>Home</span> . terms of use</p>
                </div>
                <div>
                    <h1 class="text-white">Terms of use</h1>
                </div>
            </div>
        </div>
    </div>

    <div class='container card abt-header' style='padding:20px;box-shadow:0px 4px 8px rgba(0, 0, 0, 0.1);margin-top:50px;margin-bottom:50px;border-radius:15px;'>
        <h2 style='text-align:center;'>.</h2>
            <h1 style='text-align:center;'>Terms and Conditions</h1>
        <div class='row' style='padding:50px'>
            <div style='text-align:center'>
            <p>Welcome to Garuda Holidays Travels. By accessing or using our website, services, or booking a trip with us, you agree to comply with and be bound by the following Terms of Use. Please read them carefully.</p>
            </div>
            <div>
                <h3>Acceptance of Terms</h3>
                <p>By using our services (including website browsing, package booking, tour participation, or contacting us), you agree to these Terms of Use and our Privacy Policy. If you do not agree, please refrain from using our services.</p>
            </div>
            <div>
                <h3>Services Provided</h3>
                <ul>
                    <li>We provide holiday packages, transportation, hotel bookings, guided tours, and related travel services.</li>
                    <li>All services are subject to availability, destination policies, and third-party provider rules (airlines, hotels, etc.).</li>
                </ul>
            </div>
            <div>
                <h3>Booking & Payment</h3>
                <ul>
                    <li>All bookings must be made with accurate personal and travel information.</li>
                    <li>Prices are subject to change until full payment is received.</li>
                    <li>Payment terms, deposit requirements, and cancellation policies will be communicated at the time of booking.</li>
                </ul>
            </div>
            <div>
                <h3>Cancellation & Refund Policy</h3>
                <ul>
                    <li>Cancellations by the customer may attract cancellation charges as per our policy.</li>
                    <li>Refunds (if applicable) will be processed within the stipulated time after deduction of fees.</li>
                    <li>We are not responsible for cancellations due to unforeseen circumstances such as natural disasters, strikes, or government restrictions.</li>
                </ul>
            </div>
            <div>
                <h3>Customer Responsibilities</h3>
                <ul>
                    <li>You must carry valid travel documents (passport, visa, ID proof, permits, etc.) as required.</li>
                    <li>You agree to follow all rules, safety guidelines, and local laws during travel.</li>
                    <li>Any damages caused by you to property, vehicles, or accommodations will be your responsibility.</li>
                </ul>
            </div>
            <div>
                <h3>Limitation of Liability</h3>
                <ul>
                    <li>Garuda Holidays Travels acts as an intermediary between customers and third-party service providers (hotels, airlines, transport companies).</li>
                    <li>We are not liable for delays, losses, accidents, or damages caused by third parties or force majeure events.</li>
                    <li>Our liability is limited to the value of the service booked directly through us.</li>
                </ul>
            </div>
            <div>
                <h3>ntellectual Property</h3>
                <ul>
                    <li>All content on our website (logos, text, images, brochures, itineraries) is owned by or licensed to Garuda Holidays Travels.</li>
                    <li>You may not copy, distribute, or use our materials without prior written consent.</li>
                </ul>
            </div>
            <div>
                <h3>Prohibited Use</h3>
                <p>You agree not to:</p>
                <ul>
                    <li>Misuse our website or services for unlawful purposes.</li>
                    <li>Provide false or misleading information when making a booking.</li>
                    <li>Engage in activities that harm our reputation or disrupt operations.</li>
                </ul>
            </div>
            <div>
                <h3>Changes to Terms</h3>
                <p>We reserve the right to modify these Terms of Use at any time. Updates will be posted on our website with the “Last Updated” date.</p>
            </div>
            <div>
                <h3>Governing Law & Disputes</h3>
                <ul>
                    <li>These Terms are governed by the laws of [Insert State/Country].</li>
                    <li>Any disputes shall be subject to the exclusive jurisdiction of courts in [Insert Location].</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include('./include/footer.php'); ?>
</body>
</html>
</html>