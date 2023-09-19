<?php
     session_start();
    $con=mysqli_connect("localhost","root","","tusco");
    
    if(isset($_POST['login'])){
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password);
        $role=$_POST['role'];
    
       
        $_SESSION['user']=$username;
        
       
        
        $query="SELECT * FROM user WHERE NIC='$username' AND Password='$password' AND UserType='$role'";
        $query_run=mysqli_query($con,$query);
    
       
    
          while($row=mysqli_fetch_array($query_run)){
       
          if($row['NIC']==$username && $row['Password']==$password && $row['UserType']=='admin'){
            header("Location:admin/admin.php");
          }
          elseif($row['NIC']==$username && $row['Password']==$password && $row['UserType']=='customer'){
            header("Location:customer/home.php");
          }
          elseif($row['NIC']==$username && $row['Password']==$password && $row['UserType']=='employee'){
            header("Location:employee/employee.php");
          }
          elseif($row['NIC']==$username && $row['Password']==$password && $row['UserType']=='supplier'){
            header("Location:supplier/supplier.php");
           
          }
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

        <link rel="stylesheet" href="css/log.css">


<style>
.form{
    width : 100%;
    display: block; 
     
 }

 .form form label{
     display: block; 
     font-weight:bold;
     margin-left:26%;
 }
 .form form input{
     display: block; 
     width: 50%;
     padding: 6px 10px;
     margin: 8px 0;
     box-sizing: border-box;
     border: 2px solid #7390a2;
     border-radius: 4px;
     margin-left:25%;
 
 }
 .form form input:focus {
     background-color: #6ca3c5;
 }
 .form form select{
     display: block; 
     width: 50%;
     padding: 6px 10px;
     margin: 8px 0;
     box-sizing: border-box;
     border: 2px solid #7390a2;
     border-radius: 4px;
     margin-left:25%;
 
 }
 
 .button-custom{
     width: 80px;
 } 
 .font{
    margin-left: 32%;
    margin-bottom: 30px;
    margin-top: 30px;
    color: black;
    text: decoration thickness 1px;
    font: size 50px; 
    font-weight: bold;
 }
 .img{
    margin-left: 40%;
    border-radius: 100%;
    width:200px;
    height:200px;
    display: flex;
    padding: auto;
    margin-bottom:30px;
    
 }
 .custom-btn{
    padding: 10px 30px 12px 30px;
    text-align: center; 
    font-size: 16px;
    font-weight: 500;
    color: #ffffff;
    background: #E81C2E;
    border: none;
    border-radius: 60px;
    box-shadow: inset 0 0 0 0 #202C45;
    transition: ease-out 0.5s;
    -webkit-transition: ease-out 0.5s;
    -moz-transition: ease-out 0.5s;
    margin-left: 25%;
    margin-top:40px;
    width: 100px;

}

.custom-btn:hover {
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
                        <h2>Login Here
                        </h2>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <div class="form box">
            <img class="img"src="img/logo.jpeg" alt="">
          
          <form  method="POST">
              <label class="NIC"for="pass">NIC</label>
              <input type="text" name="username" maxlength="12" required="required" data-validation-required-message="Please enter your NIC">
            
              <label class="pass"for="pass">Password</label>
              <input type="password" name="password" maxlength="12" required="required" data-validation-required-message="Please enter your Password" >
              
              <label class="role">User Type</label>
              <select name="role" id="role" required="required" data-validation-required-message="Please enter your Role" >
                <option value="">Select the role</option>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
                <option value="customer">Customer</option>
                <option value="supplier">Supplier</option>
            </select>
            <button type="submit" name="login"class="btn btn-danger custom-btn">LOGIN</button>
          </form>
    </div>
  </div>
 
</div>

   
        
        <div style="position: relative;">
                
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
        
        </div>
        
       

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
        <script>
            
        </script>
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/loh.js"></script>
    </body>
</html>
