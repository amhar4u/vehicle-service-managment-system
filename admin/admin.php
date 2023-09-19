<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Pannel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Tusco</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/logo.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Amhar</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="bi bi-calendar-week"></i>Booking</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="all booking.php" class="dropdown-item">All Bookings</a>
                            <a href="service.php" class="dropdown-item">Service Only</a>
                            <a href="repair.php" class="dropdown-item">Repairs Only</a>
                            <a href="service&repair.php" class="dropdown-item">Service & Repairs</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="bi bi-person-fill"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="all User.php" class="dropdown-item">View Users</a>
                            <a href="view customer.php" class="dropdown-item">View Customer</a>
                            <a href="view employee.php" class="dropdown-item">View Employee</a>
                        </div>
                    </div>
                    <a href="reviews.php" class="nav-item nav-link"><i class="bi bi-star-fill"></i>Reviews</a>
                    <a href="view payment.php" class="nav-item nav-link"><i class="bi bi-credit-card"></i>Payment</a>
                    <a href="view stock.php" class="nav-item nav-link"><i class="bi bi-cart-check"></i>Stock</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="bi bi-person-fill"></i>Order</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="vieworders.php" class="dropdown-item">View Orders</a>
                            <a href="recivedorders.php" class="dropdown-item">Recived Orders</a>
                            <a href="canceledorders.php" class="dropdown-item">Canceled Orders</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


         <!-- Content Start -->
         <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/logo.jpeg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today<br> Bookings</p>
                                <h6 class="mb-0">
                                <?php
                                
                                $con=mysqli_connect("localhost","root","","tusco");
                                $query="SELECT * FROM booking WHERE DATE(Date) = DATE(NOW())";
                                $query_run=mysqli_query($con,$query);

                                $row=mysqli_num_rows($query_run);
                                echo $row;
                                
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Weakly Bookings</p>
                                <h6 class="mb-0">
                                    <?php
                                     $query="SELECT * FROM booking WHERE Date> now() -  interval 7 day";
                                     $query_run=mysqli_query($con,$query);
     
                                     $row=mysqli_num_rows($query_run);
                                     echo $row;
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total <br>Customers</p>
                                <h6 class="mb-0">
                                <?php
                                     $query="SELECT * FROM user WHERE UserType='customer'";
                                     $query_run=mysqli_query($con,$query);
     
                                     $row=mysqli_num_rows($query_run);
                                     echo $row;
                                    ?>

                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total <br>Employees</p>
                                <h6 class="mb-0">
                                <?php
                                     $query="SELECT * FROM user WHERE UserType='employee'";
                                     $query_run=mysqli_query($con,$query);
     
                                     $row=mysqli_num_rows($query_run);
                                     echo $row;
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
                <!-- today Chart Start -->
            <?php
                  $con=mysqli_connect("localhost","root","","tusco");


                

                  $date = date('Y-m-d');
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
                  
                
                 

            ?>
 
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                                

                                google.charts.load("current", {packages:['corechart']});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ["Element", "Booked", { role: "style" } ],
                                    ["Full Service",<?php echo $full; ?> , "#77CCFF"],
                                    ["BodyWash",<?php echo $body; ?>  , "#0000FF"],
                                    ["Full&repair",<?php echo $fullrep; ?> , "#87CEEB"],
                                    ["Body&repair",<?php echo $fullbody; ?> , "color: #1434A4"],
                                    ["repair",<?php echo $rep; ?> , "#3388FF"]
                                ]);

                                var view = new google.visualization.DataView(data);
                                view.setColumns([0, 1,
                                                { calc: "stringify",
                                                    sourceColumn: 1,
                                                    type: "string",
                                                    role: "annotation" },
                                                2]);

                                var options = {
                                    title: "",
                                    width: 400,
                                    height: 250,
                                    bar: {groupWidth: "75%"},
                                    legend: { position: "none" },
                                };
                                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                chart.draw(view, options);
                            }
        </script>

  <!-- weeekly Chart Start -->

<?php


$queryfull1=mysqli_query($con,"SELECT * FROM booking WHERE  Date> now() -  interval 7 day AND ServiceType='2'");
$full1 = mysqli_num_rows($queryfull1);

$querybody1=mysqli_query($con,"SELECT * FROM booking WHERE  Date> now() -  interval 7 day AND ServiceType='1'");
$body1 = mysqli_num_rows($querybody1);

$queryrep1=mysqli_query($con,"SELECT * FROM booking WHERE  Date> now() -  interval 7 day AND ServiceType='3'");
$rep1 = mysqli_num_rows($queryrep1);

$queryfr1=mysqli_query($con,"SELECT * FROM booking WHERE  Date> now() -  interval 7 day AND ServiceType='5'");
$fullrep1 = mysqli_num_rows($queryfr1);

$querybr1=mysqli_query($con,"SELECT * FROM booking WHERE  Date> now() -  interval 7 day AND ServiceType='4'");
$fullbody1 = mysqli_num_rows($querybr1);


?>
<script>

  google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Booked", { role: "style" } ],
        ["Full Service",<?php echo $full1; ?> , "#77CCFF"],
        ["BodyWash",<?php echo $body1; ?>  , "#0000FF"],
        ["Full&repair",<?php echo $fullrep1; ?> , "#87CEEB"],
        ["Body&repair",<?php echo $fullbody1; ?> , "color: #1434A4"],
        ["repair",<?php echo $rep1; ?> , "#3388FF"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "",
        width: 400,
        height: 250,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);
  }
  </script>



     <?php
                      
             $b1 = mysqli_query($con,"SELECT * FROM booking WHERE ServiceType='1' ");
             $bodyquery = mysqli_num_rows($b1);

             $f1 = mysqli_query($con,"SELECT * FROM booking WHERE ServiceType='2' ");
             $fullquery = mysqli_num_rows($f1);
    ?>
      <script> 
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Booked", { role: "style" } ],
                    ["Bodywash",<?php echo $bodyquery; ?> , "#77CCFF"],
                    ["Full Service",<?php echo $fullquery; ?>  , "#0000FF"]
                ]);
                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                { calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation" },
                                2]);

                var options = {
                    title: "",
                    width: 400,
                    height: 250,
                    bar: {groupWidth: "75%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
                chart.draw(view, options);
            }
  </script>


<?php
                      
                      $br1 = mysqli_query($con,"SELECT * FROM booking WHERE ServiceType='4' ");
                      $bodyrepquery = mysqli_num_rows($br1);
         
                      $fr1 = mysqli_query($con,"SELECT * FROM booking WHERE ServiceType='5' ");
                      $fullrepquery = mysqli_num_rows($fr1);

                      $r1 = mysqli_query($con,"SELECT * FROM booking WHERE ServiceType='3' ");
                      $repquery = mysqli_num_rows($r1);
             ?>
               <script> 
                         google.charts.load("current", {packages:['corechart']});
                         google.charts.setOnLoadCallback(drawChart);
                         function drawChart() {
                         var data = google.visualization.arrayToDataTable([
                             ["Element", "Booked", { role: "style" } ],
                             ["Body&Repair",<?php echo $bodyrepquery; ?> , "#77CCFF"],
                             ["Full&repair",<?php echo $fullrepquery; ?>  , "#0000FF"],
                             ["repair",<?php echo $repquery; ?> , "#3388FF"]
                         ]);
                         var view = new google.visualization.DataView(data);
                         view.setColumns([0, 1,
                                         { calc: "stringify",
                                             sourceColumn: 1,
                                             type: "string",
                                             role: "annotation" },
                                         2]);
         
                         var options = {
                             title: "",
                             width: 400,
                             height: 250,
                             bar: {groupWidth: "75%"},
                             legend: { position: "none" },
                         };
                         var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
                         chart.draw(view, options);
                     }
           </script>




            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Today Bookings</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="columnchart_values" style="width: 600px; height: 300px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Weakly Bookings</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="columnchart_values1" style="width: 600px; height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


             <!-- Sales Chart Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Total Services</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="columnchart_values2" style="width: 600px; height: 300px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Total Service & Repairs</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="columnchart_values3" style="width: 600px; height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


           <br><br>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="admin.php">Tusco</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="http://localhost/tusco/index.php">Tusco Service</a>
                      
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>