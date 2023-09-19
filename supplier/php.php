<?php

$con=mysqli_connect("localhost","root","","tusco");
   

if(isset($_POST['supply'])){

$id=$_POST['edit_id'];       
$qty = $_POST['qty'];
$price=$_POST['price'];
$date=date("Y-m-d");

$query = "UPDATE stockorder SET oquantity='$qty',status='Supplied',price='$price' WHERE id='$id'";
$query_run= mysqli_multi_query($con,$query); 

$query1="UPDATE suppliedorder SET squantity='$qty',status='Supplied',sprice='$price' WHERE oid='$id'";
$query_run= mysqli_multi_query($con,$query1); 

if($query && $query1){
    header("location: vieworders.php");
}

}

if(isset($_POST['cancelorder'])){

    $id=$_POST['delete_id']; 
    $sid=$_POST['delete_sid'];        
    
    
    $query = "UPDATE stockorder SET status='Cancel' WHERE id='$id'";
    $query_run= mysqli_multi_query($con,$query); 
    
    $query1="UPDATE stock SET status='Cancel' WHERE id='$sid'";
    $query_run= mysqli_multi_query($con,$query1); 
    
    if($query && $query1){
        header("location: vieworders.php");
    }
    
    }

    if(isset($_POST['cancelsupply'])){

        $id=$_POST['delete_id']; 
        $sid=$_POST['delete_sid'];        
        
        
        $query = "UPDATE stockorder SET status='Ordered' WHERE id='$id'";
        $query_run= mysqli_multi_query($con,$query); 
        
        $query1="UPDATE stock SET status='Ordered' WHERE id='$sid'";
        $query_run= mysqli_multi_query($con,$query1); 
        
        if($query && $query1){
            header("location: vieworders.php");
        }
        
        }

?>