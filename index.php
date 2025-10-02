<?php
    session_start();
?>

<!doctype html>
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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Garuda holidays travels
    </title>
</head>

<body>
    <div class="container-fluid bg-container">
        <div class="row">
            <div class="col-12">
                <div class="d-md-none">
                    <div class="header-container1 d-flex flex-row justify-content-between text-white mt-2">
                        <div>
                            <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                            <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i>garudaholidaystravels@gmail.com
                            </p>
                        </div>
                        <div>
                            <p style="background: none; color:white;">
                            <?php if(isset($_SESSION['username'])){ ?>
                                <a href="logout.php" style="color: white; text-decoration:none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
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
                            <div class="mr-4 ml-5">
                                <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                                <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                            </div>
                            <div>
                                <p><i class="fa-solid fa-envelope"></i>garudaholidaystravels@gmail.com
                                </p>
                            </div>
                        </div>

                        <!-- Center section (Logo) -->
                        <div class="d-flex flex-grow-1 justify-content-center mr-5">
                            <img src="./img/logo.png" alt="logo" class="img-fluid" style="max-width: 150px;" />
                        </div>

                        <!-- Right section (Login) -->
                        <div class="mr-5">
                            <p style="background: none; color:white;">
                            <?php if(isset($_SESSION['username'])){ ?>
                                <a href="logout.php" style="color: white; text-decoration:none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                            <?php } else{ ?>
                                <a href="login.php" style="color: white; text-decoration:none;"><i class="fa-solid fa-user"></i>Login</a>
                             <?php } ?>                            
                            </p>
                        </div>
                    </div>
                </div><br />
                <nav class="navbar navbar-expand-lg navbar-custom m-md-auto">
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
    <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
    </a>
    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
        <a class="dropdown-item" href="services.php">Our Services</a>
        <a class="dropdown-item" href="dindukal.php">Dindigul Junction</a>
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
                    <a href="book.php" class="btn btn-custom">
                        <img src="./img/nav-logo.png" alt="Car"> Book a Ride
                    </a>
                </nav>
            </div>
            <div class="col-12">
                <div data-aos="fade-down" data-aos-delay="600" loading="lazy" class="home-text mt-5 mb-5">
                    <h1 class="text-white text-center">Ride in Comfort & Style</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="900" loading="lazy" class="home-text1 mt-4 text-center">
                    <h1 class="text-white mb-4">Fast, Safe & Affordable Rides with garudaholidaystravels
                    </h1>
                    <!-- <button class="mt-3">Book a Ride</button> -->
                </div>
                <div data-aos="fade-down" data-aos-delay="1000" loading="lazy" class="home-text1 mt-4 text-center">
                    <button class="mt-3"><a href="book.php" style="color:black;text-decoration:none;">Book a Ride</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-container1 position-relative">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="mt-5">
                        <div class="d-md-flex flex-row justify-content-between">
                            <div class="col-12 col-md-7">
                                <div class="text-white banner-text">
                                    <p>Looking for Cab?</p>
                                    <h1>Make your Booking</h1>
                                    <p>We are committed to making your rides memorable by tailoring our services to your
                                        needs.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" style="margin-top: -55px;">
                                <div class="home-text1 mb-3 text-center">
                                    <img src="./img/car_for_index.png" alt="" height="230" width="300"><br>
                                </div>
                                <div class="home-text1 mb-3 text-center">
                                    <button><a href="book.php" style="color:black;text-decoration:none;">Book Your Cab</a></button>
                                </div>
                                <!-- <form>
                                    <div class="d-md-flex flex-row justify-content-between">
                                        <div class="input-group mb-4 mr-3">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="fa-solid fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex flex-row justify-content-between">
                                        <div class="input-group mb-4 mr-3">
                                            <input type="text" class="form-control" placeholder="Pick Up Address">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="fa-solid fa-map-location-dot"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <input type="text" class="form-control" placeholder="Drop Address">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex flex-row justify-content-between">
                                        <div class="input-group mb-4 mr-3">
                                            <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                                            <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <input type="text" class="form-control" placeholder="Select Time">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="fa-regular fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex flex-row justify-content-between">
                                        <div class="input-group mb-4 mr-3 ">
                                            <input type="text" class="form-control" placeholder="No of Passengers">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                            <input type="button" class="form-control form-btn" value="choose your Cab">
                                        </div>
                                        <!-- <input type="button" class="input-group-text" value="Choose Your Cab"/> -->
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zig-container">
                <div class="col-12 zigzaw">
                    <img src="./img/zigzaw.png" />
                    <img src="./img/zigzaw.png" />
                </div>
            </div>
        </div>
    </div>

    <!-- About us section     -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center mb-4 abt-header">
                <h2>.</h2>
                <p>Welcome to Garuda Holiday Travels</p>
                <h1>Your first choice for traveling anywhere</h1>
            </div>
            <div class="d-md-flex flex-row">
                <div class="col-12 col-md-6 d-none d-md-block">
                    <img src="./img/about.png" width="430px" height="590px" class="img-fluid" />
                </div>
                <div class="col-12 col-md-6 d-none d-md-block">
                    <div class="d-md-flex flex-row">
                        <div class="side-content">
                            <p class="img-fluid">We are specialized in providing a high Quality service.</p>
                        </div>
                        <div class="side-img">
                            <img src="./img/sideabt.png" width="230px" height="225px" class="img-fluid" />
                        </div>
                    </div>
                    <div class="mt-4 abt-content">
                        <p>Our cab service offers a comfortable and safe journey with professional drivers, available 24/7
                            for all your needs. Whether you need a ride for airport transfers, city commutes, or special
                            events, our diverse fleet has you covered.</p>
                    </div>
                    <div class="mt-4">
                        <div class="d-md-flex flex-row">
                            <img src="./img/phone.png" width="60px" height="60px" class="mr-3" />
                            <p class="mr-2 w-75 phn-con">Call us now and make your booking</p>
                            <p class="w-100 phn-no">+91 9442833903 & +91 8248935180 </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-md-none">
                    <div class="mt-4 abt-content">
                        <p>Our cab service offers a comfortable and safe journey with professional drivers, available 24/7
                            for all your needs. Whether you need a ride for airport transfers, city commutes, or special
                            events, our diverse fleet has you covered.</p>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex flex-row">
                            <img src="./img/phone.png" width="50px" height="50px" class="mr-3" />
                            <p class="mr-2 w-75 phn-con">Call us now and make your booking</p>
                            <p class="w-100 phn-no">+91 9442833903 & +91 8248935180
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5 card abt-header" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);border-radius: 15px;">
        <div class="row">
            <div class="col-12">
            <h1 style="text-align: center;">Our vehicles</h1>
            <ul>
                <li>14-Seater, 16-Seater, and 18-Seater Tempos: Our tempos are equipped with powerful AC
                    (air conditioning) to ensure a cool and pleasant journey, even on the hottest days.</li>
                <li>Innova Cars: A comfortable and spacious option for groups of up to 7 or 8 passengers.</li>
                <li>4-Seater Cabs: Perfect for individuals, couples, or small families.</li>
            </ul>
            <br>
            <p style="text-align: center;">With easy booking and punctual service, we make sure your travel experience is always hassle-
                free.</p>
                </div>
        </div>
    </div>

    <!-- End About us section -->

    <!-- Number speak -->
    <div class="container-fluid bg-container4 mt-4 pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center mb-4 abt-header">
                <h2>.</h2>
                <p>Our Fun Facts</p>
                <h1>Numbers Speak</h1>
            </div>
        </div>
        <div class="row justify-content-center pl-md-5 pr-md-5">
            <div class="col-12 col-md-3 mt-3">
                <div class="num-card text-center">
                    <img src="./img/icon1.png" alt="Trips Icon" />
                    <h2>100+</h2>
                    <p>Trips Completed</p>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-3">
                <div class="num-card text-center">
                    <img src="./img/icon2.png" alt="Clients Icon" />
                    <h2>500+</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-3">
                <div class="num-card text-center">
                    <img src="./img/icon3.png" alt="Cabs Icon" />
                    <h2>15+</h2>
                    <p>Cabs</p>
                </div>
            </div>
            <div class="col-12 col-md-3 mt-3 ">
                <div class="num-card text-center">
                    <img src="./img/icon4.png" alt="Drivers Icon" />
                    <h2>20+</h2>
                    <p>Drivers</p>
                </div>
            </div>
        </div>
    </div>


    <!-- End Number speak -->

    <!-- choose us section -->
    <div class="container-fluid bg-container5 pt-5 pb-5">
        <div class="row text-center pl-md-5 pr-md-5">
            <div class="col-12 mb-4 abt-header">
                <h2>.</h2>
                <p> Garuda Benefit List</p>
                <h1 class="text-white">Why Choose Us</h1>
            </div>
            <!-- Benefit Boxes -->
            <div class="col-12 col-md-3 d-flex align-items-stretch ">
                <div class="choose-container p-4 text-center">
                    <img src="./img/icon11.png" class="img-fluid mb-3" alt="Safety Guarantee Icon" />
                    <h2>Safety Guarantee</h2>
                    <p>Your safety is our priority. Ride with confidence. All our drivers are verified & background
                        checked. Safe rides, every time.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="choose-container choose-border p-4 text-center">
                    <img src="./img/icon12.png" class="img-fluid mb-3" alt="On-Time Pickup Icon" />
                    <h2>On-Time Pickup</h2>
                    <p>No more waiting. Your ride arrives when it should. Experience the reliability of our on-time
                        pickups.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="choose-container choose-border p-4 text-center">
                    <img src="./img/icon13.png" class="img-fluid mb-3" alt="Affordable Ride Icon" />
                    <h2>Affordable Ride</h2>
                    <p>Quality rides, affordable prices. Experience comfort and convenience with budget-friendly rides.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="choose-container choose-border p-4 text-center">
                    <img src="./img/icon14.png" class="img-fluid mb-3" alt="24/7 Support Icon" />
                    <h2>24/7 Support</h2>
                    <p>Never alone on the road. Enjoy peace of mind with our 24/7 support service.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- End choose us section -->

    <!-- Choose car section -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center mb-4 abt-header">
                <h2>.</h2>
                <p>Our Best Cars</p>
                <h1>Choose Cars</h1>
            </div>
            <div class="col-12 text-center car-btn">
                <button class="btn mr-2">hatchback Cars</button>
                <button class="btn mr-2 ml-2">sedan Cars</button>
                <button class="btn mr-2 ml-2">suv Cars</button>
            </div>
            <?php 
            include('./db.php'); 
            $sql = "SELECT * FROM traiff";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
            ?>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                    <!-- <img src="./img/car1.png" class="car-img img-fluid" />
                    <img src="./img/carlogo1.png " class="car-logo mt-3 mb-3" /> -->
                    <h2 class="mb-3"><?php echo $row['vehicle_name']; ?></h2>
                    <p>Base rate - &#8377;<?php echo $row['base_rate']; ?></p>
                    <p>Per km - &#8377;<?php echo $row['per_km_rate']; ?></p>
                    <p>Seats - <?php echo $row['seats']; ?></p>
                    <p>Passengers - <?php echo $row['passengers']; ?></p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                   
                    <h2 class="mb-3">Tempo-18 seat</h2>
                    <p>Base rate - &#8377;4500</p>
                    <p>Per km - &#8377;18</p>
                    <p>Passengers - 18</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                   
                    <h2 class="mb-3">URBANIA-16 seat</h2>
                    <p>Base rate - &#8377;8000</p>
                    <p>Per km - &#8377;25</p>
                    <p>Passengers - 16</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                   
                    <h2 class="mb-3">Tempo-14 seat</h2>
                    <p>Base rate - &#8377;3800</p>
                    <p>Per km - &#8377;17</p>
                    <p>Passengers - 14</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                  
                    <h2 class="mb-3">Suzuki Swift</h2>
                    <p>Base rate - &#8377;1500</p>
                    <p>Per km - &#8377;11</p>
                    <p>Passengers - 4</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                    
                    <h2 class="mb-3">Toyota Innova</h2>
                    <p>Base rate - &#8377;2500</p>
                    <p>Per km - &#8377;14</p>
                    <p>Passengers - 7</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="car-container text-center car-btn">
                   
                    <h2 class="mb-3">Innova Crysta</h2>
                    <p>Base rate - &#8377;3500</p>
                    <p>Per km - &#8377;16</p>
                    <p>Passengers - 7</p>
                    <button class="btn"><a href="book.php" style="color: black;text-decoration:none;">Book Now</a></button>
                </div>
            </div> -->
        </div>
    </div>

    <!-- End choose car section -->

    <!-- Book now section -->
    <div class="container-fluid bg-container6 mt-4 pt-5 ">
        <div class="row">
            <div class="col-12 p-4 book-container pl-md-5 pr-md-5">
                <p>Make a call or Book Online</p>
                <div class="d-md-flex flex-row justify-content-between">
                    <h1>Call our Agent to get a Quote</h1>
                    <button class="btn book-btn"><a href="book.php" style="color: white;text-decoration:none;">Book Cab Now</a></button>
                </div>
            </div>
            <div class="zig-container pt-5">
                <div class="col-12 zigzaw">
                    <img src="./img/zigzaw2.png" />
                    <img src="./img/zigzaw2.png" />
                </div>
            </div>
        </div>
    </div>

    <!-- End Book now section -->


    <!-- Testimonial section -->
    <div class="container-fluid bg-container7 py-1 pt-5 pb-5">
  <div class="row">
    <div class="col-12 text-center mb-4 abt-header">
      <h2>.</h2>
      <p>Testimonials</p>
      <h1 class="text-white">Kind Words from Clients</h1>
    </div>

    <!-- Swiper Container -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Item 1 -->
        <div class="swiper-slide">
          <div class="testimonial-card text-center mx-auto" style="max-width: 600px;">
            <div class="quote-border"></div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <img src="./img/girl.jpg" alt="Profile" class="profile-image me-3">
              <div>
                <div class="name">Janani</div>
                <div class="role">Customer</div>
              </div>
            </div>
            <p class="testimonial-text">
              Had a great cab experience – clean car, polite driver, and a smooth, beautiful journey. Highly recommend!
            </p>
            <div class="stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <div class="quote-border-bottom"></div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="swiper-slide">
          <div class="testimonial-card text-center mx-auto" style="max-width: 600px;">
            <div class="quote-border"></div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <img src="./img/girl2.jpg" alt="Profile" class="profile-image me-3">
              <div>
                <div class="name">Pearl</div>
                <div class="role">Customer</div>
              </div>
            </div>
            <p class="testimonial-text">
              Wonderful cab ride – comfortable, safe, and pleasant all the way.
            </p>
            <div class="stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <div class="quote-border-bottom"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card text-center mx-auto" style="max-width: 600px;">
            <div class="quote-border"></div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <img src="./img/boy1.jpg" alt="Profile" class="profile-image me-3">
              <div>
                <div class="name">Pandi</div>
                <div class="role">Customer</div>
              </div>
            </div>
            <p class="testimonial-text">
             Cab was on time, driver was helpful, and the ride was smooth.
            </p>
            <div class="stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <div class="quote-border-bottom"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-card text-center mx-auto" style="max-width: 600px;">
            <div class="quote-border"></div>
            <div class="d-flex flex-row justify-content-center mb-3">
              <img src="./img/boy2.jpg" alt="Profile" class="profile-image me-3">
              <div>
                <div class="name">Ram</div>
                <div class="role">Customer</div>
              </div>
            </div>
            <p class="testimonial-text">
              Very comfortable ride, driver was friendly and professional. Great service!
            </p>
            <div class="stars">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <div class="quote-border-bottom"></div>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <div class="swiper-button-next" style="color:#FFC107"></div>
      <div class="swiper-button-prev" style="color:#FFC107"></div>
    </div>
  </div>
</div>
    <!-- End Testimonial section -->


    <!-- Footer section -->
    <?php include('./include/footer.php'); ?>
    <!-- End footer section -->



    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
        
    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
    },
  });
</script>
</body>

</html>