<?php
$con=mysqli_connect("localhost","root","","tusco");
/******************** BODY WASH ***************************/

	
	if (isset($_GET['id'])){

		$book_idb=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Finished' WHERE id='$book_idb'";

	
		mysqli_query($con,$sql);
	}
	header('location:../bodywash.php');


?>