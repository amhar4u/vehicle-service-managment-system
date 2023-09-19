<?php
include 'header.php'
?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="bookings.php"> All <br>Booking</a></p>
                                <h6 class="mb-0">
                                <?php
                                     $con=mysqli_connect("localhost","root","","tusco");
                                     $date = date('Y-m-d');
                                     $queryall=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date'");
                                     $all = mysqli_num_rows($queryall);
                                     echo $all; 
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="fullservice.php"> Full<br>Services</a></p>
                                <h6 class="mb-0">
                                <?php
                                
                                $con=mysqli_connect("localhost","root","","tusco");
                                $date = date('Y-m-d');
                                $queryfull=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='2'");
                                $full = mysqli_num_rows($queryfull);
                                echo $full;
                                
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="bodywash.php">Body<br>Washes</a> </p>
                                <h6 class="mb-0">
                                    <?php
                                   
                                      $querybody=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='1'");
                                      $body = mysqli_num_rows($querybody);
                                      echo $body;
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="repair.php">Repairs <br>Only</a></p>
                                <h6 class="mb-0">
                                <?php
                                   $queryrep=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='3'");
                                   $rep = mysqli_num_rows($queryrep);
                                   echo $rep;
                                    ?>

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


<br><br><br>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="fullrep.php">FullService & <br>Repairs</a> </p>
                                <h6 class="mb-0">
                                <?php
                                      $queryfr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='5'");
                                      $fullrep = mysqli_num_rows($queryfr);
                                      echo $fullrep;
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="bodyrep.php">BodyWash &<br>Repairs</a></p>
                                <h6 class="mb-0">
                                <?php
                                
                                $querybr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='4'");
                                $fullbody = mysqli_num_rows($querybr);
                                echo $fullbody;
                                
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="paid.php">Paid <br>Bookings</a> </p>
                                <h6 class="mb-0">
                                    <?php
                                      $query="SELECT * FROM booking WHERE payment='Paid' AND  DATE(Date) = DATE(NOW())";
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
                                <p class="mb-2"> <a href="notpaid.php">Not Paid <br>Bookings</a> </p>
                                <h6 class="mb-0">
                                <?php
                                     $query="SELECT * FROM booking WHERE payment='Not Paid' AND  DATE(Date) = DATE(NOW())";
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

<br><br><br>



<?php
include 'footer.php'
?>