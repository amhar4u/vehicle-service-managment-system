<?php
include 'header.php';
?>
<?php
$con=mysqli_connect("localhost","root","","tusco");

        if(isset($_POST['supplybtn']))
        {
           
            $id = $_POST['edit_id'];
            $query = "INSERT INTO suppliedorder (oid,name,brand,sprice,NIC,eNIC,status)
            SELECT id,name,brand ,price,NIC,eNIC,status FROM stockorder WHERE id='$id'";
            $query_run= mysqli_query($con,$query);  

            ?>
            <div class="bg">
                <h2>Fill Supply Details</h2>
                <form  method="POST" action="php.php">
                <input type="hidden" name="edit_id" value="<?php echo $id;?>">
            
                <label class="vehtype" for="vehtype">Quantity</label>
                <input type="text" name="qty" maxlength="30" required="required">  

                <label class="vehtype" for="vehtype">Price</label>
                <input type="text" name="price" maxlength="12"  required="required">  
            </div> 
               <button type="submit"class="btn btn-success button-custom btn-aliment " name="supply"> Supply</button>
               <a href="vieworders.php" class="btn btn-danger button-custom btn-aliment"> CANCEL</button></a>

        <?php  
}  
    
?>


<?php
include 'footer.php';
?>