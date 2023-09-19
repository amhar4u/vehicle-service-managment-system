
<?php

/******************** BODY WASH ***************************/
$con=mysqli_connect("localhost","root","","tusco");
	
	if (isset($_GET['id'])){

		$book_idb=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Started' WHERE id='$book_idb'";

	
		mysqli_query($con,$sql);
	}
	header('location:../bodywash.php');


?>
<?php
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete_id'];
		$query="DELETE  FROM booking WHERE id='$id'";
		$query_run = mysqli_query($con,$query);
		if($query){
			header('location:../bodywash.php');
		}
	}
?>