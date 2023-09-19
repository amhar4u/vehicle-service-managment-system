<?php

    $con=mysqli_connect("localhost","root","","tusco");

?>


<?php

/******************** Bodyrep ***************************/

	
	if (isset($_GET['id'])){

		$book_idbr=$_GET['id'];

		$sql="UPDATE booking SET
			Status='Started' WHERE id='$book_idbr'";

	
		mysqli_query($con,$sql);
	}
	header('location:../bodyrep.php');


?>
<?php
	if(isset($_POST['delete']))
	{
		$id=$_POST['delete_id'];
		$query="DELETE  FROM booking WHERE id='$id'";
		$query_run = mysqli_query($con,$query);
		if($query){
			header('location:../bodyrep.php');
		}
	}
?>