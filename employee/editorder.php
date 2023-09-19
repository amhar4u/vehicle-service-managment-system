<?php

include 'header.php';

?>

<br><br>
<?php


 
?>

<?php
$con=mysqli_connect("localhost","root","","tusco");

        if(isset($_POST['editbtn']))
        {
           
            $id = $_POST['edit_id'];
            $query= "SELECT * FROM stockorder WHERE id='$id'";
            $query_run = mysqli_query($con,$query);

            foreach($query_run as $row)
            {
?>

            <div class="bg">
                <h2>Edit Order Details</h2>
                <form  method="POST" action="db/query.php">
                <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
            
                <label class="vehtype" for="vehtype">Quantity</label>
                <input type="text" name="qty" maxlength="30" value="<?php  echo $row['oquantity'];?>">  

                
            </div> 
               <button type="submit"class="btn btn-success button-custom btn-aliment " name="update"> Update</button>
               <a href="orderstock.php" class="btn btn-danger button-custom btn-aliment"> CANCEL</button></a>

<?php  
            }  
}       
?>
<?php

include 'footer.php';

?>