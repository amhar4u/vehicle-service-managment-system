<?php

include 'header.php';

?>

<br><br>
<?php


 
?>

<?php
$con=mysqli_connect("localhost","root","","tusco");

        if(isset($_POST['orderbtn']))
        {
           
            $id = $_POST['edit_id'];
            $query = "INSERT INTO stockorder (sid,name,brand,price,NIC,status)
            SELECT id,name,brand ,price,NIC,status FROM stock WHERE id='$id'";
            $query_run= mysqli_query($con,$query);  

        

            ?>
            <div class="bg">
                <h2>Fill Order Details</h2>
                <form  method="POST" action="db/query.php">
                <input type="hidden" name="edit_id" value="<?php  echo $id;?>">
            
                <label class="vehtype" for="vehtype">Quantity</label>
                <input type="text" name="qty" maxlength="30" required="required">  

                <label class="vehtype" for="vehtype">Employee NIC</label>
                <input type="text" name="enic" maxlength="12"  required="required" placeholder="Enter your NIC">  
            </div> 
               <button type="submit"class="btn btn-success button-custom btn-aliment " name="order"> Order</button>
               <form method="post" action="db/query.php">
                                    <input type="hidden" name="delete_id" value="<?php  echo $id;?>">
                                    <button type="submit"class="btn btn-danger button-custom btn-aliment " name="cancel"> Cancel</button>
               </form>
               
               

        <?php  
}  
        
?>
<?php

include 'footer.php';

?>