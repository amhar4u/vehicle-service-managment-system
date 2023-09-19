<?php
$con=mysqli_connect("localhost","root","","tusco");



if(isset($_POST['add']))
{
  $username = $_POST['NIC'];
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $contact=$_POST['Contact'];
  $address=$_POST['Address'];
  $password = md5($_POST['Password']);
  $cpassword = md5($_POST['CPassword']);
  $role=$_POST['role'];

$query1 = mysqli_query($con, "INSERT INTO user (NIC,CName,Email ,ContactNo,Address,Password,cpassword,UserType)
 VALUES('$username','$name','$email','$contact','$address','$password','$cpassword','$role')"
); 

if($query1){
header("location: view employee.php");
} 

}

?>