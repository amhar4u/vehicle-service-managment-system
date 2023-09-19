<?php

$con=mysqli_connect("localhost","root","","tusco");
require "../phpmailer/PHPMailer.php";
require "../phpmailer/SMTP.php";
require "../phpmailer/Exception.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST['pay'])){

$name=$_POST['cname'];
$emailaddress = $_POST['email'];
$cardname=$_POST['ctype'];
$cardnumber=$_POST['cnumber'];
$exdate=$_POST['edate'];
$cvcnumber=$_POST['cvcno'];
$username = $_POST['nic'];

        $query = "INSERT INTO payment (name,email,cardtype,cardno,exDate,cvcno,NIC)
        VALUES('$name','$emailaddress','$cardname','$cardnumber','$exdate','$cvcnumber','$username')";
         $query_run= mysqli_multi_query($con,$query);

        $query1="UPDATE booking SET payment='Paid'WHERE NIC='$username'"; 
        $query_run= mysqli_multi_query($con,$query1); 
    

        $mail = new PHPMailer(true);
          $mail -> isSMTP();
          $mail -> Host = "smtp.gmail.com";
          $mail -> SMTPAuth = "true";
          $mail -> SMTPSecure = "tls";
          $mail -> Port = "587";
          $mail -> Username = "tuscoservice@gmail.com";
          $mail -> Password = "zdniccztulydnfhs";
          $mail -> Subject = "Tusco Registration";
          $mail -> setFrom("tuscoservice@gmail.com", "Registraion Confirmation");                
          $email = $emailaddress;
          $message = "MR $name You are Successfully Registered with Tusco Service As a $role Now You Can Login With Your NIC  And Password";
          $mail -> isHTML(true);
          $mail -> CharSet = "UTF-8";
          $mail -> Body = $message;
          $mail -> addAddress($email);
          
          
          $mail -> Send();
         // $mail ->smtpClose();


                if($query && $query1){
                
                    header("location: mybooking.php");
                } 
        }


        
        


        if ($_POST['submit'] == 'bookpay') {
            
            $username = $_POST['nic'];
            $emailaddress = $_POST['email'];
            $reg = $_POST['regno'];
            $vtype = $_POST['vtype'];
            $stype=$_POST['type'];
            $date= $_POST['date'];
            $time=$_POST['time'];
            
            
        
        
        $query = "INSERT INTO booking (NIC,email,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                VALUES('$username','$emailaddress','$reg','$vtype','$stype','$date','$time','Not Paid')";
        
        $query_run= mysqli_query($con,$query);  

        if($stype==1)
        {
            $type="BodyWash";
        }
        elseif($stype==2)
        {
            $type="FullService";
        }
        elseif($stype==3)
        {
            $type="Repair";
        }
        elseif($stype==4)
        {
            $type="BodyWash & Repair";
        }
        else
        {
            $type="FullService & Repair"; 
        }

        if($time==1)
        {
            $t="7.00-9.00 AM";
        }
        elseif($time==2)
        {
            $t="9.00-11.00 AM";
        }
        elseif($time==3)
        {
            $t="11.00-1.00 PM";
        }
        elseif($time==4)
        {
            $t="1.30-3.30 PM";
        }
        else
        {
            $t="3.30-5.30 PM"; 
        }
           
        $mail = new PHPMailer(true);
          $mail -> isSMTP();
          $mail -> Host = "smtp.gmail.com";
          $mail -> SMTPAuth = "true";
          $mail -> SMTPSecure = "tls";
          $mail -> Port = "587";
          $mail -> Username = "tuscoservice@gmail.com";
          $mail -> Password = "zdniccztulydnfhs";
          $mail -> Subject = "Tusco Registration";
          $mail -> setFrom("tuscoservice@gmail.com", "Booking Confirmation");                
          $email = $emailaddress;
          $message = "Dear Customer Your Booking Successfull <br> Vehicle NO : $reg <BR> VehicleType : $vtype <br> ServiceType : $type <br> Date : $date <BR> Time : $t ";
          $mail -> isHTML(true);
          $mail -> CharSet = "UTF-8";
          $mail -> Body = $message;
          $mail -> addAddress($email);
          
          
          $mail -> Send();
         // $mail ->smtpClose();
          
                    if($query_run){
                    
                        header("location: payment.php");
                    } 
        
        
        } 
        else if ($_POST['submit'] == 'book')
         {
            
        
            $username = $_POST['nic'];
            $emailaddress = $_POST['email'];
            $reg = $_POST['regno'];
            $vtype = $_POST['vtype'];
            $stype=$_POST['type'];
            $date= $_POST['date'];
            $time=$_POST['time'];
            
            
        
        
        $query = "INSERT INTO booking (NIC,email,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                VALUES('$username','$emailaddress','$reg','$vtype','$stype','$date','$time','Not Paid')";
        
        $query_run= mysqli_query($con,$query);  

        if($stype==1)
        {
            $type="BodyWash";
        }
        elseif($stype==2)
        {
            $type="FullService";
        }
        elseif($stype==3)
        {
            $type="Repair";
        }
        elseif($stype==4)
        {
            $type="BodyWash & Repair";
        }
        else
        {
            $type="FullService & Repair"; 
        }

        if($time==1)
        {
            $t="7.00-9.00 AM";
        }
        elseif($time==2)
        {
            $t="9.00-11.00 AM";
        }
        elseif($time==3)
        {
            $t="11.00-1.00 PM";
        }
        elseif($time==4)
        {
            $t="1.30-3.30 PM";
        }
        else
        {
            $t="3.30-5.30 PM"; 
        }

        $mail = new PHPMailer(true);
          $mail -> isSMTP();
          $mail -> Host = "smtp.gmail.com";
          $mail -> SMTPAuth = "true";
          $mail -> SMTPSecure = "tls";
          $mail -> Port = "587";
          $mail -> Username = "tuscoservice@gmail.com";
          $mail -> Password = "zdniccztulydnfhs";
          $mail -> Subject = "Tusco Registration";
          $mail -> setFrom("tuscoservice@gmail.com", "Booking Confirmation");                
          $email = $emailaddress;
          $message = "Dear Customer Your Booking Successfull <br> Vehicle NO : $reg <BR> VehicleType : $vtype <br> ServiceType : $type <br> Date : $date <BR> Time : $t";
          $mail -> isHTML(true);
          $mail -> CharSet = "UTF-8";
          $mail -> Body = $message;
          $mail -> addAddress($email);
          
          
          $mail -> Send();
          $mail ->smtpClose();
        
        
                    if($query_run){
                    
                        header("location: mybooking.php");
                    } 
        
        } 
    
        if (isset($_POST['extend']))
        {
           
       
           $id = $_POST['edit_id'];
           $stype=$_POST['type'];
           $date= $_POST['date'];
           $time=$_POST['time'];
           
           
       
       
       $query = "UPDATE booking  SET ServiceType= '$stype',Date='$date',time='$time' WHERE id='$id'";
       
       $query_run= mysqli_query($con,$query);  
       
                   if($query_run){
                   
                       header("location: mybooking.php");
                   } 
       
       } 
        
           
?>