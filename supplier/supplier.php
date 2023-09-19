<?php
$con=mysqli_connect("localhost","root","","tusco");
session_start();
$username=$_SESSION['user'];
include 'header.php';


?>
<div class="margin">
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">New<br> Orders</p>
                                <h6 class="mb-0">
                                <?php
                                $query="SELECT * FROM stockorder WHERE NIC= '$username' AND status='Ordered'";
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
                                <p class="mb-2">Supplied Orders</p>
                                <h6 class="mb-0">
                                    <?php
                        
                                      $query="SELECT * FROM suppliedorder WHERE NIC= '$username' AND status='supplied'";
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
                                <p class="mb-2">Recived Orders</p>
                                <h6 class="mb-0">
                                    <?php
                        
                                        $query="SELECT * FROM stockorder WHERE NIC= '$username' AND status='Recived'";
                                        $query_run=mysqli_query($con,$query);

                                        $row=mysqli_num_rows($query_run);
                                        echo $row;
                                    
                                    ?>
                                </h6>
                            </div>
                        </div>
                    </div>
 </div>
 <br><br><br><br><br><br><br><br><br> <br><br><br>


<?php
include 'footer.php';
?>