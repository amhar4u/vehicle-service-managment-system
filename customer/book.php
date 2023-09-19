<?php
     include 'header.php';
     $con=mysqli_connect("localhost","root","","tusco");
   
 ?>

  <!-- Page Header Start -->
  <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Make Booking</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <div class="form box">
            <img class="img"src="img/logo.jpeg" alt="">
            <form  method="POST" action="dbcon.php">
                <label class="nic"for="NIC">NIC</label>
                <input type="text" name="nic" maxlength="12" required="required" data-validation-required-message="Please enter your ">
                <label class="email"for="email">Email</label>
                <input type="text" name="email" maxlength="30" required="required" data-validation-required-message="Please enter your ">
                <label class="reg" for="reg">Vehicle Reg No</label>
                <input type="text" name="regno" maxlength="12" required="required" data-validation-required-message="Please enter your " >
                <label class="vehtype" for="vehtype">Vehicle Type</label>
                <select name="vtype" id="vtype" required="required" data-validation-required-message="Please enter your Address" >
                    <option value="">Select the Vehicle Type</option>
                    <option value="lightVehicle">Light Vehicles</option>
                    <option value="motorbike">Motor Bike</option>
                    <option value="threewheel">Three Wheel</option>
                </select>

                <label class="sertype" for="sertype">Service Type</label>
                <select name="type" id="type"  required>
                    <option value="">Select Service Type </option>
                <?php
                    $query = "SELECT * FROM book Order by ServiceType";
                    $result = mysqli_query($con,$query); 
                    if ($result->num_rows > 0 ) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value='.$row['id'].'>'.$row['ServiceType'].'</option>';
                    }
                    }
                ?> 
          </select>
                <label class="dat" for="dat">Date</label>
                <input type="date" name="date" required="required" data-validation-required-message="Please enter your Date" id="day" onchange="getTime(this.value)">
                
                <label for="pwd">Available Time</label>
                <select name="time" id="time" class="form-control"   required>
                    <option>Select Time</option>
                </select>
            <br>
            
            <button type="submit" name="submit" value="book"class="btn btn-success btnbook button-custom" >Book</button>
            <button type="submit" name="submit" value="bookpay"class="btn btn-danger btnbookpay " >Book & pay</button>   
           
               <br>
    </form>
</div>

<script type="text/javascript">
 
  function getTime(day){
    var type = $("#type").val();
    $.ajax({
        type: "post",
        url: "ajaxdata.php",
        data: {
            day: day,
            book_id: type
        },
        dataType: "text",
        success: function (response) {
            console.log(response);
            $('#time').html(response);
        }
    });
  }


  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



<?php
 include 'footer.php';
?>
