<?php

include 'header.php';

?>

<br><br>

<div class="table-responsive">
                <?php
                      $con=mysqli_connect("localhost","root","","tusco");
                      $query = "SELECT s.id,s.sid,s.name,s.brand,s.oquantity,s.price,u.Name
                      FROM stockorder s
                      INNER JOIN user u ON s.NIC= u.NIC WHERE status='Cancel'";
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
                            <th>Supplier</th>
                            <th>Order</th>
                            <th>Delele</th>
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
                               <form action="reorder.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                                    <button type="submit" name="reorderbtn"class="btn btn-success " >Re-Order</button>
                               </form>
                            </td>
                            <td>
                               <form method="post" action="db/query.php">
                                    <input type="hidden" name="delete_id" value="<?php  echo $row['id'];?>">
                                    <input type="hidden" name="delete_id" value="<?php  echo $row['sid'];?>">
                                    <button type="submit" name="cancelorder"  class="btn btn-danger button-custom">Delete</button>
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