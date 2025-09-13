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
    /* Reset & basics */
    * {
      box-sizing: border-box;
    }
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('./img/homebg.png') no-repeat center center fixed;
      background-size: cover;
      color: #FFC107;
    }

    /* Overlay to darken background */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      
      z-index: -1;
    }

    /* Centered login box */
    .login-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-box {
      background-color: rgba(0, 0, 0, 0.75);
      padding: 40px 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px #FFC107aa;
      border: 2px solid #FFC107;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
      font-size: 2rem;
      color: #FFC107;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #FFC107;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      outline: none;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      box-shadow: 0 0 8px #FFC107;
      background-color: #222;
      color: #FFC107;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 1.1rem;
      font-weight: 700;
      background-color: #FFC107;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      color: black;
    }

    button:hover {
      background-color: #e0aa06;
    }

    /* Responsive */
    @media (max-width: 480px) {
      .login-box {
        padding: 30px 20px;
      }
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
                            <p><i class="fa-solid fa-user"></i> Login</p>
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
                    <p class="text-white"><span>Home</span> . Login</p>
                </div>
                <div>
                    <h1 class="text-white">Login</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="login-container">
    <form class="login-box" action="login.php" method="POST">
    <div class="text-center">
                            <img src="./img/logo.png" alt="logo" />
                        </div>  
    <h2> Login</h2>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required />

      <button type="submit">Login</button>
      <div class="login-link">
       Create an account? <a href="register.php" style="color:white;text-decoration:none;">Register</a>
      </div>
  </div>
  <?php
include('db.php'); // Make sure this connects $conn to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["username"]); // username input actually refers to email
    $password = trim($_POST["password"]);

    // Escape input
    $email = mysqli_real_escape_string($conn, $email);

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $user['password'])) {
            echo "<script>alert('Login successful!');</script>";
            // You can redirect or start session here if needed
        } else {
            echo "<script>alert('Login failed! Incorrect password. Redirecting to register...'); window.location.href = 'register.php';</script>";
        }
    } else {
        echo "<script>alert('Login failed! User not found. Redirecting to register...'); window.location.href = 'register.php';</script>";
    }

    mysqli_close($conn);
}
?>

    <!-- Footer -->

    <?php include('./include/footer.php');?>

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