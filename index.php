<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tusco Service Center</title>
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
        <link href="css/index.css" rel="stylesheet">

        <style>

            /*******************************/
/********** About CSS **********/
/*******************************/
.about {
    position: relative;
    width: 100%;
    padding: 45px 0 15px 0;
}

.about .section-header {
    margin-bottom: 30px;
    margin-left: 0;
}

.about .about-img img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 30px;
}

.about .about-content {
    margin-bottom: 30px;
}

.about .about-content ul {
    margin: 0;
    padding: 0;
    list-style: none;
    margin-bottom: 25px;
}

.about .about-content ul li {
    margin-bottom: 5px;
}

.about .about-content ul li i {
    margin-right: 8px;
    color: #E81C2E;
}


        </style>
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
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                            <a href="booking.php" class="nav-item nav-link"> Booking</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            
                            
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="login.php">Login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/car red.png" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                            If your trust is in man, your joy will soon be buried in the cemetery. If you hope is in cars, your happiness will soon be found in the mechanic shop.
                            </p>
                            <a class="btn btn-custom" href="price.php">Go Next</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                            <p>
                            Take care of your car in the garage, and the car will take care of you on the road.
                            </p>
                            <a class="btn btn-custom" href="service.php">Go Next</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                            The smooth feel of your hand on the wheel, almost like your hands are gliding over the finish of a perfectly clean car.
                            </p>
                            <a class="btn btn-custom" href="about.php">Go Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

       <!-- About Start -->
       <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and Reparing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                            Our mechanic shop has been in business for  10 years. We are a small vehicle repair and service center that is family owned.
                            The reason our customers are loyal to us is because we have a passion for serving our community, and we show that in our work ethic. 
                            We provide that small-town friendliness that is hard to find at a mechanic shop and service center in crowded cities. With a tech-savvy  auto repair staff,
                            you can rest assured that we will understand your needs and do our best to meet them. We are known for being able to find and fix complex auto repair issues. Your safety and satisfaction are top priorities to our mechanic shop. 
                            Tusco  Repair and service  strives to be a reliable business that you can trust now and for years to come.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window wiping</li>
                            </ul>
                            <a class="btn btn-custom" href="service.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4" >
                        <div class="footer-social">
                            <div clsss ="ul-a"><br>
                            <a class="btn" href="https://twitter.com/ServiceTusco"><i class="fab fa-twitter"></i></a><br>
                             <a class="btn" href="https://www.facebook.com/profile.php?id=100084895597807"><i class="fab fa-facebook-f"></i></a><br>
                             <a class="btn" href="https://www.youtube.com/channel/UCSwVT5oK5u3ZRyn5GOCmDRg/featured"><i class="fab fa-youtube"></i></a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" >
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"> 228/4,Kalpitiya Road,Thigali,Eththale.</i></p>
                            <p><i class="fa fa-phone-alt"></i>+94771168714</p>
                            <p><i class="fa fa-envelope"></i>tuscoservice@gmail.com</p>
                            
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-4">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="service.php">Our Service</a>
                            <a href="booking.php">Booking Schedule</a>
                            <a href="price.php">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" >
                        <div class="footer-social">
                            <div class="ul-b">
                             <br><a class="btn" href="https://www.instagram.com/tuscoservice/"><i class="fab fa-instagram"></i></a>
                             <br><a class="btn" href="https://www.linkedin.com/in/tusco-service-759687249/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BPasjGsV3RyWAUL%2FpyE5OfQ%3D%3D"><i class="fab fa-linkedin-in"></i></a>
                             <br><a class="btn" href="https://wa.me/message/Y2Q2F4M7STEBM1"><i class="fab fa-whatsapp"></i></a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="index.php">Copy Right</a>, All Right Reserved. Designed By <a href="index.php">Tusco Service</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
