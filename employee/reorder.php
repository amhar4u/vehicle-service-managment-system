<?php

include 'header.php';

?>
<?php
$con=mysqli_connect("localhost","root","","tusco");

        if(isset($_POST['reorderbtn']))
        {
           
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM stockorder WHERE id='$id'";
            $query_run= mysqli_query($con,$query);  

            foreach($query_run as $row)
            {

            ?>
            <div class="bg">
                <h2>Fill Order Details</h2>
                <form  method="POST" action="db/query.php">
                <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                <input type="hidden" name="edit_sid" value="<?php  echo $row['sid'];?>">
            
                <label class="vehtype" for="vehtype">Quantity</label>
                <input type="text" name="qty" value="<?php  echo $row['oquantity'];?>">  

                <label class="vehtype" for="vehtype">Employee NIC</label>
                <input type="text" name="enic" value="<?php  echo $row['eNIC'];?>">  
            </div> 
               <button type="submit"class="btn btn-success  btn-aliment " name="reorder">Re-Order</button>
               <a href="cancelorders.php" class="btn btn-danger button-custom btn-aliment"> CANCEL</button></a>

        <?php  
}  
}      
?>

<?php

include 'footer.php';

?>