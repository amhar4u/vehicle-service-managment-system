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
                      INNER JOIN user u ON s.eNIC= u.NIC WHERE s.NIC='$username' AND status='Ordered'";
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
                            <th>Supply</th>
                            <th>Cancel</th>
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
                               <form action="supply.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                                    <button type="submit" name="supplybtn"class="btn btn-success button-custom" >supply</button>
                               </form>
                            </td>
                            <td>
                               <form method="post" action="php.php">
                                    <input type="hidden" name="delete_id" value="<?php  echo $row['id'];?>">
                                    <input type="hidden" name="delete_sid" value="<?php  echo $row['sid'];?>">
                                    <button type="submit" name="cancelorder"  class="btn btn-danger button-custom">Cancel</button>
                               </form>
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