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


    <title>Garuda Holidays Travels
</title>
<style>

</style>
</head>

<body>
    <div class="container-fluid bg-container9">
        <div class="row">
            <div class="col-12">
                <div class="d-md-none">
                    <div class="header-container1 d-flex flex-row justify-content-between text-white mt-2">
                        <div>
                            <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                            <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i> garudaholidaystravels@gmail.com</p>
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
                                <p><i class="fa-solid fa-envelope"></i> garudaholidaystravels@gmail.com 
</p>
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
                </div><br/> 
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
                    <p class="text-white"><span>Home</span> . Privacy Policy</p>
                </div>
                <div>
                    <h1 class="text-white">Privacy Policy</h1>
                </div>
            </div>
        </div>
    </div>

    <div class='container abt-header privacy-content'>
        <h2 style='text-align:center'>.</h2>
            <p style='text-align:center'>Privacy Policy draft</p>
            <h1 style='text-align:center'>Privacy Policy</h1>
            <br>
            <p style='text-align:center'>Garuda Holidays Travels values your trust. This Privacy Policy explains how we collect, use, disclose, and protect your personal information when you use our website, services, or contact us</p>
        <div class='row' style='padding:50px;'>
            <div>
                <h3>Information We Collect</h3>
                <p>We may collect the following types of information:</p>
                <ul>
                    <li><strong>Personal Information:</strong> Name, email address, phone number, address, ID proof, payment details when booking a trip.</li>
                    <li><strong>Non-Personal Information:</strong> Browser type, device information, IP address, and cookies for analytics and better service.</li>
                    <li><strong>Travel Preferences:</strong> Destination choices, travel dates, special requirements, etc.</li>
                </ul>
            </div><br><br>
            <div>
                <h3>How We Use Your Information</h3>
                <p>We use your information to:</p>
                <ul>
                    <li>Process bookings and provide travel-related services.</li>
                    <li>Communicate with you regarding your reservations, offers, and updates.</li>
                    <li>Improve our website, customer support, and service quality.</li>
                    <li>Comply with legal and regulatory requirements.</li>
                </ul>
            </div><br><br>
            <div>
                <h3>Sharing of Information</h3>
                <p>We do not sell or rent your personal data. However, we may share information with:</p>
                <ul>
                    <li><strong>Service Providers:</strong> Hotels, airlines, transport operators, and partners to fulfill your bookings.</li>
                    <li><strong>Legal Authorities:</strong> When required by law or in response to valid legal requests.</li>
                    
                </ul>
            </div><br><br>
            <div>
                <h3>Data Protection & Security</h3>
                <p>We take reasonable measures to safeguard your personal data from unauthorized access, loss, misuse, or disclosure. While we strive for complete security, no method of transmission over the Internet is 100% secure.</p>
            </div><br><br>
            <div>
                <h3>Cookies & Tracking Technologies</h3>
                <p>Our website may use cookies to improve user experience, analyze traffic, and personalize content. You may disable cookies in your browser settings, but some features of the site may not function properly.</p>
            </div><br><br>
            <div>
                <h3>Your Rights</h3>
                <p>You have the right to:</p>
                <ul>
                    <li>Access, update, or correct your personal information.</li>
                    <li>Request deletion of your data (subject to legal and contractual obligations).</li>
                    <li>Opt-out of promotional communications at any time.</li>
                </ul>
            </div><br><br>
            <div>
                <h3>Third-Party Links</h3>
                <p>Our website may contain links to third-party websites. We are not responsible for their privacy practices, and we encourage you to review their privacy policies.</p>
            </div><br><br>
            <div>
                <h3>Changes to this Policy</h3>
                <p>We may update this Privacy Policy from time to time. Any changes will be posted on our website with the revised effective date.</p>
            </div><br><br>
            <div>
                <h3>Contact Us</h3>
                <p>If you have any questions about this Privacy Policy or how we handle your data, please contact us:</p>   
            </div><br><br>
        </div>
    </div>




    <?php include('./include/footer.php'); ?>
</body>
</html>
</html>