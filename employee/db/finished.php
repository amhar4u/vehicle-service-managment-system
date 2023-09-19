<?php
$con=mysqli_connect("localhost","root","","tusco");
?>









<?php

/******************** Bodyrep ***************************/

	
	if (isset($_GET['id'])){

		$book_idbr=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Finished' WHERE id='$book_idbr'";

	
		mysqli_query($con,$sql);
	}
	header('location:../bodyrep.php');


?>
