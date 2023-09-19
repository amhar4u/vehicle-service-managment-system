<?php

/******************** REPAIR ***************************/

$con=mysqli_connect("localhost","root","","tusco");
	if (isset($_GET['id'])){

		$book_idr=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Finished' WHERE id='$book_idr'";

	
		mysqli_query($con,$sql);
	}
	header('location:../repair.php');


?>