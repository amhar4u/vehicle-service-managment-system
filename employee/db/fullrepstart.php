<?php

/******************** FULL REP ***************************/
$con=mysqli_connect("localhost","root","","tusco");
	
	if (isset($_GET['id'])){

		$book_idfr=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Started' WHERE id='$book_idfr'";

	
		mysqli_query($con,$sql);
	}
	header('location:../fullrep.php');


?>
<?php
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete_id'];
		$query="DELETE  FROM booking WHERE id='$id'";
		$query_run = mysqli_query($con,$query);
		if($query){
			header('location:../fullrep.php');
		}
	}
?>
