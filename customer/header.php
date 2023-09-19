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
        <link href="./css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="./css/price.css">
        <link href="./css/service.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link rel="stylesheet" href="css/book.css">
        <style>

                .bold{
                    text-align : center;
                    margin-bottom:50px;
                    font-weight: bold;
                }

             
                .frm{
                     width:20%;
                    
    
                   
                    }
                    .tab{
                        width:100%;
                    }
                    .btn-ali{
                        margin-left:150px;
                        position:absolute;
                        top:0px;
                    }
                    .btnbook{
                        margin-left:40%;

                    }
                    .btnbookpay{
                        margin-left:30px;

                    }
                    .table-custom{
                    margin-left:30px;
                    text-align:center;
                    width:95%

                        }
                .button-custom{
                    width: 80px;
                }
                .chrt{
                    
                }
                .box {
                    margin-left:15%;
                
                    padding: 10px;
                    box-shadow: 5px 10px 8px #888888;
                    width:70%;
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
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="price.php" class="nav-item nav-link">Package</a>
                            <a href="availability.php" class="nav-item nav-link"> Availability</a>
                            <a href="book.php" class="nav-item nav-link"> Book Now</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="mybooking.php" class="nav-item nav-link">My Booking</a>
                            
                            
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="http://localhost/tusco/index.php">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
