<?php
include("header.php")



?>

<!-- Page Header Start -->
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Make Payment</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
       
        <div class="form">
            <img class="img"src="img/logo.jpeg" alt="">
            <form  method="post" action="dbcon.php" >
                <label class="name" for="name">Cardholder Name</label>
                <input type="text" name="cname" maxlength="30" required="required" data-validation-required-message="Please enter your " >
                <label class="email" for="email">Email</label>
                <input type="text" name="email" maxlength="30" required="required" data-validation-required-message="Please enter your " >
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
                <label class="nic"for="NIC">NIC</label>
                <input type="text" name="nic" maxlength="12" required="required" data-validation-required-message="Please enter your ">
                <button type="submit" name="pay" class="custom-btn" >Pay</button>   

         </form>

<?php
include("footer.php")
?>