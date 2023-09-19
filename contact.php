<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tusco";
    
    $conn = mysqli_connect($server, $username, $password, $dbname) ;
    


    if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    
            $name = $_POST['name'] ;
            $email = $_POST['email'] ;
            $subject = $_POST['subject'] ;
            $message = $_POST['message'] ;
    
            $query =  "insert into review (name,email,subject,message) values('$name', '$email', '$subject', '$message')";
            $run = mysqli_query($conn, $query) or die(mysqli_error());
    
    
    
        }else{
            echo "all fields required" ;
        }
    }
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
        <link href="css/contact.css" rel="stylesheet">
        <style>
            .bg form .buttons {
                display:flex;
                margin-left: 29%;
                margin-top:30px;
    
           }
           .bg form .buttons .submit{
                margin-left: 10px;
                border-radius: 10px;
           }
           .bg form label{
    margin-left: 30%;
    display:block;
    font-weight:bold;
}
.bg form input{
    display: block;
    margin-left: 29%;
    width:80%;
    margin-bottom:5px;
    padding-left:5px;
    padding-top:5px;
    margin-top: 10px;

}
.bg form select {

    display: block;
    margin-left: 29%;
    width:80%;
    margin-bottom:5px;
    padding-left:5px;
    padding-top:5px;
    margin-top: 10px;

}
.bg form textarea {

display: block;
margin-left: 29%;
width:80%;
margin-bottom:5px;
padding-left:5px;
padding-top:5px;
margin-top: 10px;

}
}
           .bg form .buttons .submit{
                margin-left: 10px;
                border-radius: 10px;
           }


        .bg form .buttons .submit{
           margin-left: 10px;
           border-radius: 5px;
           color: #202C45;
           transition: .3s;
           padding: 10px 30px 12px 30px;
           text-align: center; 
           font-size: 16px;
           font-weight: 500;
           color: #ffffff;
           background: #E81C2E;
           border: none;
           box-shadow: inset 0 0 0 0 #202C45;
           transition: ease-out 0.5s;
           -webkit-transition: ease-out 0.5s;
            -moz-transition: ease-out 0.5s;
         }
         .bg form .buttons .submit:hover,
         .bg form .buttons .submit:active,
         .bg form .buttons .submit:focus{
            color: #E81C2E;
            outline: none;
            text-decoration: none;
         }
         .bg form .buttons .submit:hover {
            color: #E81C2E;
            background: #202C45;
            box-shadow: inset 200px 0 0 0 #202C45;
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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Price</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                            <a href="booking.php" class="nav-item nav-link"> Booking</a>
                            <a href="contact.php" class="nav-item nav-link active">Contact</a>
                            
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="login.php">Login</a>
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
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>For Suggest Your Reviwes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p>6 days, 7:30 - 7:00</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+94771168714</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>tuscoservice@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <form  action="" method="post" >
                        <input type="text" class="form-control" name="name"  placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                         <br>
                        <input type="email" class="form-control" name="email"  placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <br>
                        <input type="text" class="form-control" name="subject"  placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <br>
                        <textarea class="form-control" name="message"  placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <br>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                        <br>
                        </form>
                
                    </div>
                        <div class="a">    
                            <a href="https://www.google.lk/maps/place/Tusco+service+center/@8.1137425,79.6004534,12z/data=!4m9!1m2!2m1!1snear+service+center!3m5!1s0x3afd6d501ab02393:0x61fce9efafd0c289!8m2!3d8.1137505!4d79.732297!15sChNuZWFyIHNlcnZpY2UgY2VudGVykgEIY2FyX3dhc2g" target="_blank">
                            <img src="img\location.jpeg"></a> 
                        </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
                             <br><a class="btn" href="https://twitter.com/ServiceTusco"><i class="fab fa-whatsapp"></i></a>
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
