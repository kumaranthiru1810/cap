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


    <title>garudaholidaystravels
</title>
 <style>
    /* Reset some default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Background image and overlay */
    body {
      background: url('./img/homebg.png') ;
      position: relative;
    }
/* 
    body::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 0;
    } */

    .register-container {
      position: relative;
      z-index: 1;
      max-width: 400px;
      margin: 80px auto;
      background-color: rgba(0, 0, 0, 0.8);
      padding: 40px;
      border-radius: 10px;
      color: #fff;
      box-shadow: 0 8px 16px rgba(0,0,0,0.5);
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #FFC107;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 5px;
      background-color: #333;
      color: #fff;
      font-size: 16px;
    }

    .form-group input:focus {
      outline: none;
      box-shadow: 0 0 5px #FFC107;
    }

    .register-btn {
      width: 100%;
      padding: 12px;
      background-color: #FFC107;
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
      background-color: #e0a800;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
    }

    .login-link a {
      color: #FFC107;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
  </head>
<body>
    <div class="container-fluid bg-container10">
        <div class="row">
            <div class="col-12">
                <div class="d-md-none">
                    <div class="header-container1 d-flex flex-row justify-content-between text-white mt-2">
                        <div class="mr-4 ml-5">
                               <p><i class="fa-solid fa-phone"></i> +91 9442833903</p>
                            <p><i class="fa-solid fa-phone"></i> +91 8248935180</p>
                            </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i> garudaholidaystravels@gmail.com 
</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-user"></i> Register</p>
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
                                <p><i class="fa-solid fa-envelope"></i>garudaholidaystravels@gmail.com </p>
                            </div>
                        </div>
                
                        <!-- Center section (Logo) -->
                        <div class="d-flex flex-grow-1 justify-content-center mr-5">
                            <img src="./img/logo.png" alt="logo" class="img-fluid" style="max-width: 150px;" />
                        </div>
                
                        <!-- Right section (Login) -->
                        <!-- <div class="mr-5">
                            <p><i class="fa-solid fa-user"></i> Login</p>
                        </div> -->
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
                                <a class="nav-link" href="services.php">Services</a>
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
                    <p class="text-white"><span>Home</span> . Register</p>
                </div>
                <div>
                    <h1 class="text-white">Register</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="register-container">
        <div class="text-center">
                            <img src="./img/logo.png" alt="logo" />
                        </div>  
    <h2>Create Account</h2>
    <form method="POST" action="">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit" class="register-btn">Register</button>

      <div class="login-link">
        Already have an account? <a href="login.php">Login</a>
      </div>
    </form>
  </div>
    <!-- Footer -->

    <?php include('./include/footer.php');?>
    <?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encrypt password

    // Escape values to avoid SQL injection (basic protection)
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Insert query
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account created successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>


    <!-- End Footer -->

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
</body>
</html>