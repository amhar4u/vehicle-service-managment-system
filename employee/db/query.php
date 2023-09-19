<?php

$con=mysqli_connect("localhost","root","","tusco");
   

if(isset($_POST['order'])){

$id=$_POST['edit_id'];        
$qty = $_POST['qty'];
$enic=$_POST['enic'];
$date=date("Y-m-d");

$query = "UPDATE stockorder SET oquantity='$qty',status='Ordered',eNIC='$enic',ODate='$date' WHERE sid='$id'";
$query_run= mysqli_multi_query($con,$query); 

$query1="UPDATE stock SET status='Ordered' WHERE id='$id'";
$query_run= mysqli_multi_query($con,$query1); 

if($query && $query1){
    header("location:../viewstock.php");
}

}

if(isset($_POST['update'])){

  $id=$_POST['edit_id'];        
  $qty = $_POST['qty'];
  $date=date("Y-m-d");
  
  $query = "UPDATE stockorder SET oquantity='$qty',ODate='$date' WHERE id='$id'";
  $query_run= mysqli_query($con,$query); 
  
 
  
  if($query){
      header("location:../orderstock.php");
  }
  
  }



  if(isset($_POST['cancelorder'])){

    $id=$_POST['delete_id']; 
    $sid=$_POST['delete_sid'];        
    
    
    $query = "DELETE  FROM stockorder WHERE id='$id'";
    $query_run= mysqli_multi_query($con,$query); 
    
    $query1="UPDATE stock SET status='Available' WHERE id='$sid'";
    $query_run= mysqli_multi_query($con,$query1); 
    
    if($query && $query1){
        header("location:../orderstock.php");
    }
    
    }

    if(isset($_POST['deletestock'])){

      $id=$_POST['delete_id'];         
      
      $query = "DELETE  FROM stock WHERE id='$id'";
      $query_run= mysqli_query($con,$query); 
      
      if($query){
          header("location:../viewstock.php");
      }
      
      }

      if(isset($_POST['recivebtn'])){

        $id=$_POST['edit_id'];        
        $qty = $_POST['edit_qty'];
        $oqty = $_POST['edit_oqty'];
        $date=date("Y-m-d");
        $tqty=$qty+$oqty;

        
        $query = "UPDATE stockorder SET status='Recived', RDate='$date' WHERE sid='$id'";
        $query_run= mysqli_multi_query($con,$query); 
        
        $query1="UPDATE stock SET quantity='$tqty', status='Available' WHERE id='$id'";
        $query_run= mysqli_multi_query($con,$query1); 
        
        if($query && $query1){
            header("location:../suppliedorder.php");
        }
        
        }


        if(isset($_POST['reorder'])){

            $id=$_POST['edit_id']; 
            $sid=$_POST['edit_sid'];        
            $qty = $_POST['qty'];
            $enic=$_POST['enic'];
            
            $query = "UPDATE stockorder SET oquantity='$qty',status='Ordered',eNIC='$enic' WHERE id='$id'";
            $query_run= mysqli_multi_query($con,$query); 
            
            $query1="UPDATE stock SET status='Ordered' WHERE id='$sid'";
            $query_run= mysqli_multi_query($con,$query1); 
            
            if($query && $query1){
                header("location:../cancelorder.php");
            }
            
            }



            if(isset($_POST['cancel'])){

                $id=$_POST['delete_id'];         
                
                $query = "DELETE  FROM stockorder WHERE sid='$id'";
                $query_run= mysqli_query($con,$query); 
                
                if($query){
                    header("location:../viewstock.php");
                }
                
                }
?>