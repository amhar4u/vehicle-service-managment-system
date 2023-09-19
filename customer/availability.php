
<?php
  include 'header.php';
?>
  
  
   <!-- Page Header Start -->
   <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Booking Availability</h2>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript"></script>

             
 

            <?php

                    $con=mysqli_connect("localhost","root","","tusco");

                    if(isset($_POST['search'])){

                    $date = $_POST['text'];
                    $queryfull=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='2'");
                    $full = mysqli_num_rows($queryfull);

                    $querybody=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='1'");
                    $body = mysqli_num_rows($querybody);

                    $queryrep=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='3'");
                    $rep = mysqli_num_rows($queryrep);

                    $queryfr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='5'");
                    $fullrep = mysqli_num_rows($queryfr);

                    $querybr=mysqli_query($con,"SELECT * FROM booking WHERE Date='$date' AND ServiceType='4'");
                    $fullbody = mysqli_num_rows($querybr);
                    
                    $balance = 25 - ($full+$body+$rep+$fullrep+$fullbody);
                   
                    }

              ?>

                <script>

               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(drawChart);

               function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['Availability','Booked'],
                        ['FullService',<?php echo $full; ?>],
                        ['Bodywash',<?php echo $body; ?>],
                        ['Repair',<?php echo $rep; ?>],
                        ['FullService & Repair',<?php echo $fullrep; ?>],
                        ['Bodywash & Repair',<?php echo $fullbody; ?>],
                        ['Available',<?php echo $balance; ?>]
                    ]);

                    var options = {
                    title:'',
                    is3D: true,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                    chart.draw(data, options);
                }
                </script>
<center>
                <table >
                    <tr>
                        
                        <td >
                                <nav class="navbar navbar-light bg-light">
                                    <form class="form-inline" method="post">
                                            <input class="form-control mr-sm-2 frm" type="date" placeholder="YYYY-MM-DD" aria-label="Search" name="text">
                                            <button class="btn btn-outline-success my-2 my-sm-0 btn" type="submit" name="search">Search</button>
                                    </form>
                                </nav>
                        </td>
                    
                    </tr>
                </table>
                <table >
                    <tr>
                        
                        <td >
                            <div class="chrt" id="piechart1" style="width: 600px; height: 500px;">   </div>
                            <div class="price-footer" >
                                <a class="btn btn-custom btnbook" href="book.php">Book Now</a>
                             </div>
                        </td>
                    </tr> 
                </table>      
</center>

<?php
   include 'footer.php';
?>
