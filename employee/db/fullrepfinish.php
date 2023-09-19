<?php

/******************** FULL REP ***************************/
$con=mysqli_connect("localhost","root","","tusco");
	
	if (isset($_GET['id'])){

		$book_idfr=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Finished' WHERE id='$book_idfr'";

	
		mysqli_query($con,$sql);
	}
	header('location:../fullrep.php');


?>
