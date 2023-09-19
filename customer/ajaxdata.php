<?php

$con = new mysqli("localhost", "root","", "tusco");

if (isset($_POST['book_id'])) {
    $date=$_POST['day'];
	$id = $_POST['book_id'];

	$append = "";
	$loop = 0;
	$DataArray = array();

	//echo '<option>'.$date.'> '.$id.'</option>';
	
	$query = "SELECT * FROM booking,availabletime,book where booking.time = availabletime.tid AND booking.ServiceType = book.id AND booking.date = '$date' AND booking.ServiceType = $id";  	
	$result = mysqli_query($con,$query); 
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$DataArray[] = $row['tid'];
			++$loop;
		}
		$count = count($DataArray);

		$query = mysqli_query($con, "SELECT * FROM availabletime");
		if($count == mysqli_num_rows($query)){
			echo '<option>No Time Available This Day</option>';
		}

		else{
			$loop = 0;
			while($row = mysqli_fetch_assoc($query)){
				$got = array_search($row['tid'],$DataArray,false);
				if($got == ""){
					$append .= '<option value="'.$row['tid'].'">'.$row['Time'].'</option>';
				}
				else{
					continue;
				}
			}
			echo $append;
		}
		
	}
	else{
		$query = mysqli_query($con, "SELECT * FROM availabletime");
		while($row = mysqli_fetch_assoc($query)){
			echo '<option value="'.$row['tid'].'">'.$row['Time'].'</option>';
		}
	}

}

?>