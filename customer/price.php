<?php
$con=mysqli_connect("localhost","root","","tusco");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tusco Customer</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
       
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/price.css">
        <link href="./css/service.css" rel="stylesheet">
        <link href="./css/contact.css" rel="stylesheet">
        <link rel="stylesheet" href="css/book.css">
        
        
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                            <!--<img src="img\logo.jpeg" alt="Logo"> -->
                            <h1>Tusco<span>Service </span></h1>   
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>6 days, 7:30 a.m - 7:00 p.m</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Contact Us</h3>
                                        <p>+94771168714</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>tuscoservice@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Package</a>
                            <a href="availability.php" class="nav-item nav-link"> Availability</a>
                            <a href="book.php" class="nav-item nav-link"> Book Now</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            
                            
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="http://localhost/tusco/index.php">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Washing Plan</h2>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Offer Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>OFFERS</p>
                    <h2>OUR OFFERS</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                    <div class="bag">
        <div class="coupon">
           <div class="cont">
            <p>
             <center><h3 font-family="Georgia, serif" font-size= 50px;> <b> SEASONAL OFFER</b></h3></center>
            </p>
           </div>
           <p>
            <center>
                <h4  font-family="Georgia, serif" font-size= 50px;>
                50% OFF ON <br> NEW CUSTOMERS <br>
                FOR ALL PACKAGES 
             </h4>
             <br><br>
             <div class="price-footer">
                     <a class="btn btn-custom" href="register.php">Book Now</a>
              </div>
            </center>
           </p>
        </div>
    </div>
    <br><br><br>
                    </div>
                    <div class="testimonial-item">
                    <div class="bag">
        <div class="coupon">
           <div class="cont">
            <p>
             <center><h3 font-family="Georgia, serif" font-size= 50px;> <b> SEASONAL OFFER</b></h3></center>
            </p>
           </div>
           <p>
            <center>
                <h4  font-family="Georgia, serif" font-size= 50px;>
                 GET FREE SERVICE,<br>AFTER 3 SERVICES <br> CONTINUOUSLY<br>
                FOR ALL PACKAGES 
             </h4>
             <br>
             <div class="price-footer">
                     <a class="btn btn-custom" href="register.php">Book Now</a>
              </div>
            </center>
           </p>
        </div>
    </div>
    <br><br><br>
                    </div>
                    <div class="testimonial-item">
                    <div class="bag">
        <div class="coupon">
           <div class="cont">
            <p>
             <center><h3 font-family="Georgia, serif" font-size= 50px;> <b> SEASONAL OFFER</b></h3></center>
            </p>
           </div>
           <p>
            <center>
                <h4  font-family="Georgia, serif" font-size= 50px;>
                IF YOU GET <br> 2 OIL CHANGES <br> FROM US.. <br>
                                           3RD OIL CHANGE IS <br> FREE FROM US
 
             </h4>
             
             <div class="price-footer">
                     <a class="btn btn-custom" href="register.php">Book Now</a>
              </div>
            </center>
           </p>
        </div>
    </div>
    <br><br><br>

                    </div>
                    <div class="testimonial-item">
                    <div class="bag">
        <div class="coupon">
           <div class="cont">
            <p>
             <center><h3 font-family="Georgia, serif" font-size= 50px;><b> ANNIVERSARY OFF</b></h3></center>
            </p>
           </div>
           <p>
            <center>
                <h4  font-family="Georgia, serif" font-size= 50px;>
                EVERY OCTOBER<br> 10% DISCOUNT  ON  <br>ALL SERVICE PACKAGES <br> FOR ANNIVERSARY
             </h4>
             <br>
             <div class="price-footer">
                     <a class="btn btn-custom" href="register.php">Book Now</a>
              </div>
            </center>
           </p>
        </div>
    </div>
    <br><br><br>

                    </div>
                </div>
            </div>
        </div>
        <!-- Offer END -->
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan For<br>Light Vehicles</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Body Wash </h3>
                                <h2><span>RS</span><strong>1500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service </h3>
                                <h2><span>RS</span><strong>3000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Repaires only</h3>
                                <h2><span>RS</span><strong>5000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil Changing</li>
                                    <li><i class="far fa-check-circle"></i>Break Adjusment</li>
                                    <li><i class="far fa-check-circle"></i>Wheel Alignment</li>
                                    <li><i class="far fa-check-circle"></i>Engine Service</li>
                                    <li><i class="far fa-check-circle"></i>Air Fillter</li>
                                    
                                    
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="price">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                        <div class="price-header">
                                <h3>Body Wash & Repaires</h3>
                                <h2><span>RS</span><strong>1500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service </h3>
                                <h2><span>RS</span><strong>3000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 


        <div class="price">
            <div class="container">
               <div class="section-header text-center">
                    <h2>Choose Your Plan For<br>Three Wheels</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Body Wash</h3>
                                <h2><span>RS</span><strong>1000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service </h3>
                                <h2><span>RS</span><strong>2000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3> Repaires Only </h3>
                                <h2><span>RS</span><strong>3500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil Changing</li>
                                    <li><i class="far fa-check-circle"></i>Grece Changing</li>
                                    <li><i class="far fa-check-circle"></i>Engine Repair</li>
                                    <li><i class="far fa-check-circle"></i>Engine Tuneup</li>
                                    <li><i class="far fa-check-circle"></i>Brake Adjusment</li>
                                    <li><i class="far fa-check-circle"></i>Air Fillter</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="price">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                        <div class="price-header">
                                <h3>Body Wash & Repaires</h3>
                                <h2><span>RS</span><strong>1500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service & Repaires</h3>
                                <h2><span>RS</span><strong>3000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="price">
            <div class="container">
               <div class="section-header text-center">
                    <h2>Choose Your Plan For<br>Motor Bikes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Body Wash</h3>
                                <h2><span>RS</span><strong>800</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service </h3>
                                <h2><span>RS</span><strong>1600</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Repaires Only </h3>
                                <h2><span>RS</span><strong>2500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Oil Changing</li>
                                    <li><i class="far fa-check-circle"></i>Brake Adjustment</li>
                                    <li><i class="far fa-check-circle"></i>Electrical Repairs</li>
                                    <li><i class="far fa-check-circle"></i>Engine Repaires</li>
                                    <li><i class="far fa-check-circle"></i>Chain Spocket Repairs</li>
                                    <li><i class="far fa-check-circle"></i>Air Fillter</li>
                                    
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="price">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                        <div class="price-header">
                                <h3>Body Wash & Repaires</h3>
                                <h2><span>RS</span><strong>1500</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Full Service & Repaires</h3>
                                <h2><span>RS</span><strong>3000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Remove Parts & Washing</li>
                                    <li><i class="far fa-check-circle"></i>Repaires</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="register.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
 
        <!-- Price End -->
        
        <?php
          include 'footer.php';
        ?>
