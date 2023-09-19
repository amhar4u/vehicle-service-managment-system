
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
        <link rel="stylesheet" href="css/booking.css">
        <link rel="stylesheet" href="css/bookform.css">
        <style>

.h1-custom{
    font-weight: bold;
    margin-left:100px;
    
}
.tab{
    width:100%;
}
.btn-ali{
    margin-left:150px;
    position:absolute;
    top:0px;
}
.frm{
    width:20%;
    
}
.btnbook{
    margin-left:40%;
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
                            <a href="booking.php" class="nav-item nav-link active"> Booking</a>
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
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Booking Availability</h2>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript"></script>

             
 

            <?php

                    $con=mysqli_connect("localhost","root","","tusco");

                    if(isset($_POST['search'])){

                    $date = $_POST['text'];
                    $queryfull=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='2'");
                    $full = mysqli_num_rows($queryfull);

                    $querybody=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='1'");
                    $body = mysqli_num_rows($querybody);

                    $queryrep=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='3'");
                    $rep = mysqli_num_rows($queryrep);

                    $queryfr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='5'");
                    $fullrep = mysqli_num_rows($queryfr);

                    $querybr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='4'");
                    $fullbody = mysqli_num_rows($querybr);
                    
                    $balance = 25 - ($full+$body+$rep+$fullrep+$fullbody);
                   
                    }

              ?>

                <script>

               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(drawChart);

               function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['Availability','Booked'],
                        ['FullService',<?php echo $full; ?>],
                        ['Bodywash',<?php echo $body; ?>],
                        ['Repair',<?php echo $rep; ?>],
                        ['FullService & Repair',<?php echo $fullrep; ?>],
                        ['Bodywash & Repair',<?php echo $fullbody; ?>],
                        ['Available',<?php echo $balance; ?>]
                    ]);

                    var options = {
                    title:'',
                    is3D: true,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                    chart.draw(data, options);
                }
                </script>

<center>
                <table >
                    <tr>
                        
                        <td >
                                <nav class="navbar navbar-light bg-light">
                                    <form class="form-inline" method="post">
                                            <input class="form-control mr-sm-2 frm" type="date" placeholder="YYYY-MM-DD" aria-label="Search" name="text">
                                            <button class="btn btn-outline-success my-2 my-sm-0 btn" type="submit" name="search">Search</button>
                                    </form>
                                </nav>
                        </td>
                    
                    </tr>
                </table>
                <table >
                    <tr>
                        
                        <td >
                            <div class="chrt" id="piechart1" style="width: 600px; height: 500px;">   </div>
                            <div class="price-footer" >
                                <a class="btn btn-custom btnbook" href="register.php">Book Now</a>
                             </div>
                        </td>
                    </tr> 
                </table>      
</center>

                
        <!-- Footer Start -->
        <div class="footer" >
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
        <script src="js/bookform.js"></script>
    </body>
</html>
