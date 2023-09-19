<?php
include("header.php")

?>


<?php

$con=mysqli_connect("localhost","root","","tusco");

  if(isset($_POST['editbtn']))
  {
    $id = $_POST['edit_id'];
    $query= "SELECT * FROM booking WHERE  id='$id'";
    $query_run = mysqli_query($con,$query);

    foreach($query_run as $row)
  {
?>

<div class="form">
            <h1 class="font">Fill The Card Details</h1>
            <img class="img"src="img/logo.jpeg" alt="">
            <form  method="post" action="dbcon.php" >
                <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>" >
                <label class="name" for="name">Cardholder Name</label>
                <input type="text" name="cname" maxlength="30" required="required" data-validation-required-message="Please enter your " >
                <label class="type" for="type">Card Type</label>
                <select name="ctype" id="cardtype" required="required" data-validation-required-message="Please enter your Address" >
                    <option value="">Select the Card Type</option>
                    <option value="Visa">Visa</option>
                    <option value="Master">Master</option>
                    <option value="Amex">Amex</option>
                </select>
                <label class="num" for="num">Card Number</label>
                <input type="text" name="cnumber" maxlength="19" required="required" data-validation-required-message="Please enter your " >
                <label class="date" for="date">Expired Date</label>
                <input type="text" name="edate" maxlength="5" required="required" data-validation-required-message="Please enter your " >
                <label class="cvc" for="cvc">CVC</label>
                <input type="text" name="cvcno" maxlength="3" required="required" data-validation-required-message="Please enter your " >
                <label class="cvc" for="cvc">NIC</label>
                <input type="text" name="nic" maxlength="12" required="required" data-validation-required-message="Please enter your ">
                

                <button type="submit" name="update" class="custom-btn" >Pay</button>   

         </form>
<?php

      }
   }  
?>
<?php
include("footer.php")
?>