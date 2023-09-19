<?php

/******************** All ***************************/
$con=mysqli_connect("localhost","root","","tusco");
	
	if (isset($_GET['id'])){

		$book_id=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Finished' WHERE id='$book_id'";

	
		mysqli_query($con,$sql);
	}
	header('location:../notpaid.php');


?>
