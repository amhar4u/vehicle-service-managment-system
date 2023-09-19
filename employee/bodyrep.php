<?php

include 'header.php';

?>


<div class="table-responsive">
                <?php
                      $con=mysqli_connect("localhost","root","","tusco");
                      $query="SELECT * FROM booking WHERE ServiceType='4' AND  DATE(Date) = DATE(NOW())";
                      $query_run = mysqli_query($con,$query);
                ?>
                <table class="table table-primary table-striped table-custom table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIC</th>
                            <th>Vehicle Number</th>
                            <th>Vehicle Type</th>
                            <th>Service Type</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Accept</th>
                            <th>Reject</th>
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
                            <td><?php  echo 'bodywash & repair';?></td>
                            <td><?php  echo $row['payment'];?></td>
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
                            
                            <td>
                            <?php
                            if($row['Status']=="Pending") {

                                    echo 
                                    "<a href=db/start.php?id=".$row['id']." class='btn btn-success button-custom'>Start</a>";}

                             else if($row['Status']=="Started"){
                                    echo 
                                    "<a href=db/finished.php?id=".$row['id']." class='btn btn-primary button-custom'>Finished</a>";}
                             else
                                
                                    echo
                                    "<center><mark style='background-color: green; color: white; margin:auto;'>"."Finished"."</mark></center>";
                            ?>
                            </td>
                            <td>
                            <?php
                            if($row['Status']=="Started"  || $row['Status']=="Finished")
                            { ?>
                                  <script type="text/javascript">
                                        function showMessage() {
                                            alert("You Can Not Cancel The Booking After Start The Work.");
                                        }
                                  </script>
                                  <input type="button" id="btnShowMsg" class="btn btn-danger button-custom"value="Cancel" onClick="showMessage()" />
                                <?php
                                }
                                else
                                {
                                ?>
                                <form action="db/start.php" method="post">
                                    
                                    <input type="hidden" name="delete_id" value="<?php  echo $row['id'];?>">  
                                    <button type="submit" name="delete"  class="btn btn-danger button-custom">Cancel</button>

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
                        ?>
                    </tbody>
                    
                </table>
            </div>

            <a href="employee.php" class="btn btn-danger but-custom btn-al"> Back</button></a>
<br><br><br><br><br><br><br><br>





<?php

include 'footer.php';

?>