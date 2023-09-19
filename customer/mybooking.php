<?php
include("header.php")
?>
 <!-- Page Header Start -->
 <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>My Booking</h2>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Page Header End -->
<br><br>
               <table>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <td  colspan="2">
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline" method="post">
                                    <input class="form-control mr-sm-2 frm" type="text" placeholder="" aria-label="Search" name="text" maxlength="12">
                                    <button class="btn btn-outline-success my-2 my-sm-0 btn" type="submit" name="search">Search</button>
                                </form>
                        </nav>
                    </td>
            
                </tr>
               </table>
               <br><br>
                
        
    <div class="table-responsive">
                <?php
                      $con=mysqli_connect("localhost","root","","tusco");

                      if(isset($_POST['search'])){

                             $nic = $_POST['text'];
                             $query="SELECT * FROM booking WHERE NIC='$nic' AND (DATE(Date) >= DATE(NOW()) OR Date>now() -  interval 3 day) ";
                             $query_run = mysqli_query($con,$query);
                ?>
                <table class="table table-primary table-striped table-custom table-bordered border-dark table-custom">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIC</th>
                            <th>Vehicle Number</th>
                            <th>Vehicle Type</th>
                            <th>Service Type</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Work</th>
                            <th>Payment</th>
                            <th>Extend</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           if(mysqli_num_rows( $query_run)>0)
                           {
                             while($row=mysqli_fetch_assoc($query_run))
                              {
                        ?>

                        <tr>
                            <td><?php  echo $row['id'];?></td>
                            <td><?php  echo $row['NIC'];?></td>
                            <td><?php  echo $row['VehicleRno'];?></td>
                            <td><?php  echo $row['VehicleType'];?></td>
                            <td>
                            <?php 
                            if($row['ServiceType']=="1") {
                                echo  "BodyWash";}
                            else if($row['ServiceType']=="2"){
                                    echo "FullService"; }
                            else if($row['ServiceType']=="3"){
                                    echo "Repair"; }
                            else if($row['ServiceType']=="4"){
                                    echo "BodyWash & Repair"; }
                            else if ($row['ServiceType']=="5"){
                                    echo "FullService & Repair";   } 
                                ?>  
                            </td>
                            <td><?php  echo $row['Date'];?></td>
                            <td>
                            <?php 
                            if($row['time']=="1") {
                                echo  "7.00-9.00 AM";}
                            else if($row['time']=="2"){
                                    echo "9.00-11.00 AM"; }
                            else if($row['time']=="3"){
                                    echo "11.00-1.00 PM"; }
                            else if($row['time']=="4"){
                                    echo "1.30-3.30 PM"; }
                            else if ($row['time']=="5"){
                                    echo "3.30-5.30 PM";   } 
                                ?>  
                            </td>
                            <td><?php  echo "<center><mark style='background-color: #1589FF; color: white; margin:auto;'>".$row['Status'] ."</mark></center>";?></td>

                            
                            <td>
                            <?php
                              if($row['payment']=="Not Paid") { ?>
                               <form action="payment.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                                    <button type="submit" name="editbtn"class="btn btn-success button-custom" >Pay</button>
                               </form>
                               <?php }
                               else if ($row['payment']=="Paid"){
                               echo
                               "<center><mark style='background-color: green; color: white; margin:auto;'>"."PAID"."</mark></center>";
                              }
                              ?>
                            </td>
                            <td>
                            <?php
                            if($row['Status']=="Started"  || $row['Status']=="Finished")
                            { ?>
                    
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Extend </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    You Can Extend Your Booking before Start the Work Sorry For Inconvinience
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" style="width:80px;" data-dismiss="modal">OK</button>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            }
                            else
                            {?>
                                <form action="extend.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                                        <button type="submit" name="extendbtn"  class="btn btn-danger button-custom">Extend</button>
                                </form>
                                        
                                </td>
                            </tr>
                            <?php
                            }
                        }
                             
                    }
                    else
                    {
                      ?><center><b><font color="red"> <?php echo  "No Record Found" ; ?> </font></b></center> <?php
                    }
                 }
                 ?>
                </tbody>
                    
                </table>
            </div>
    


<?php
include("footer.php")
?>