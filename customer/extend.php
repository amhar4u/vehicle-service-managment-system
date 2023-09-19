<?php
include("header.php")

?>

<!-- Page Header Start -->
  <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Extend Booking</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

<?php
  $con=mysqli_connect("localhost","root","","tusco");

  if(isset($_POST['extendbtn']))
  {
    $id = $_POST['edit_id'];
    $query= "SELECT * FROM booking WHERE  id='$id'";
    $query_run = mysqli_query($con,$query);

    foreach($query_run as $row)
  {
?>
     <br>
     <div class="form box">
     <br>
            
            <form  method="POST" action="dbcon.php">
                <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>" >
                <label class="sertype" for="sertype">Service Type</label>
                <select name="type" id="type"  value="<?php  echo $row['ServiceType'];?>">
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
                <input type="date" name="date" value="<?php  echo $row['Date'];?>" id="day" onchange="getTime(this.value)">
                
                <label for="pwd">Available Time</label>
                <select name="time" id="time" class="form-control"  value="<?php  echo $row['time'];?>">
                    <option>Select Time</option>
                </select>
            <br>
            
            <button type="submit" name="extend" value="book"class="btn btn-success btnbook button-custom" >Extend</button>
            <a href="mybooking.php" class="btn btn-danger button-custom btn-al"> Back</button></a>
           
               <br>
    </form>
</div>
<?php
                }
            }
?>
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
include("footer.php")
?>
