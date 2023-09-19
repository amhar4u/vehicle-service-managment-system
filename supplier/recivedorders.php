<?php
session_start();
include 'header.php';
$con=mysqli_connect("localhost","root","","tusco");
$username=$_SESSION['user'];
?>
 
 <div class="table-responsive">
                <?php
                      
                      $query = "SELECT s.id,s.sid,s.name,s.brand,s.oquantity,s.price,s.NIC,u.Name
                      FROM stockorder s
                      INNER JOIN user u ON s.eNIC= u.NIC WHERE s.NIC='$username' AND status='Recived'";
                      $query_run = mysqli_query($con,$query);
                ?>
                <table class="table table-primary table-striped table-custom table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Employee</th>
                            <th>Status</th>
                    
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
                            <td><?php  echo $row['name'];?></td>
                            <td><?php  echo $row['brand'];?></td>
                            <td><?php  echo $row['oquantity'];?></td>
                            <td><?php  echo $row['price'];?></td>
                            <td><?php  echo $row['Name'];?></td>
                            <td>
                                    <button type="submit" name="supplybtn"class="btn btn-success button-custom" >Recived</button>
                            </td>
                         
                        </tr>
                        <?php

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
           


<?php
include 'footer.php';
?>