<?php
            $con=mysqli_connect("localhost","root","","tusco");

                            if(isset($_POST['submitall'])){
                            
                                    $username = $_POST['nic'];
                                    $reg = $_POST['regno'];
                                    $vtype = $_POST['vtype'];
                                    $stype=$_POST['type'];
                                    $date= $_POST['date'];
                                    $time=$_POST['time'];
                                    


                                    $query = "INSERT INTO booking (NIC,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                                        VALUES('$username','$reg','$vtype','$stype','$date','$time','Not Paid')";

                                    $query_run= mysqli_query($con,$query);   
                                    if($query){
                                       header("location: all booking.php"); 
                                    } 

                            }

                            if(isset($_POST['add']))
                            {
                            
                              $username = $_POST['NIC'];
                              $name = $_POST['Name'];
                              $email = $_POST['Email'];
                              $contact=$_POST['Contact'];
                              $address=$_POST['Address'];
                              $password = md5($_POST['Password']);
                              $cpassword = md5($_POST['CPassword']);
                              
                         
                 
                            $query = mysqli_query($con, "INSERT INTO user(NIC,Name,Email ,ContactNo,Address,Password,CPassword,UserType)
                             VALUES('$username','$name','$email','$contact','$address','$password','$cpassword','customer')"
                         ); 

                         if($query){
                            header("location: view customer.php");
                          } 
                     }
              

                     if(isset($_POST['add']))
                            {
                                    $username = $_POST['NIC'];
                                    $name = $_POST['Name'];
                                    $email = $_POST['Email'];
                                    $contact=$_POST['Contact'];
                                    $address=$_POST['Address'];
                                    $password = md5($_POST['Password']);
                                    $cpassword = md5($_POST['CPassword']);
                                    

                                    $query1 = mysqli_query($con, "INSERT INTO user (NIC,Name,Email ,ContactNo,Address,Password,cpassword,UserType)
                                    VALUES('$username','$name','$email','$contact','$address','$password','$cpassword','employee')"
                                    ); 

                                            if($query1){
                                            header("location: view employee.php");
                                            } 

                            }


                            
                            if(isset($_POST['submit'])){
                            
                                $username = $_POST['nic'];
                                $reg = $_POST['regno'];
                                $vtype = $_POST['vtype'];
                                $stype=$_POST['type'];
                                $date= $_POST['date'];
                                $time=$_POST['time'];
                                
                                


                                $query = "INSERT INTO booking (NIC,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                                    VALUES('$username','$reg','$vtype','Repaire','$date','$time','Not Paid')";

                                $query_run= mysqli_query($con,$query);   
                              
                                if($query){
                                    header("location: repair.php");
                                    } 


                        }


                        if(isset($_POST['Submit'])){
                            
                            $username = $_POST['nic'];
                            $reg = $_POST['regno'];
                            $vtype = $_POST['vtype'];
                            $stype=$_POST['type'];
                            $date= $_POST['date'];
                            $time=$_POST['time'];
                            
                            


                            $query1 = "INSERT INTO booking (NIC,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                                VALUES('$username','$reg','$vtype','$stype','$date','$time','Not Paid')";

                            $query_run= mysqli_query($con,$query1);    

                            if($query1){
                                header("location: service&repair.php");
                                }  
                        }




                        if(isset($_POST['SubmiT'])){
                            
                            $username = $_POST['nic'];
                            $reg = $_POST['regno'];
                            $vtype = $_POST['vtype'];
                            $stype=$_POST['type'];
                            $date= $_POST['date'];
                            $time=$_POST['time'];
                            
                            


                            $query = "INSERT INTO booking (NIC,VehicleRno,VehicleType ,ServiceType,Date,time,payment)
                                VALUES('$username','$reg','$vtype','$stype','$date','$time','Not Paid')";

                            $query_run= mysqli_query($con,$query);    

                            if($query){
                                header("location: service.php");
                            }

                    }

                    if(isset($_POST['update'])){
              
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $reg = $_POST['regno'];
                        $vtype = $_POST['vtype'];
                        $stype=$_POST['type'];
                        $date= $_POST['date'];
                        $time=$_POST['time'];
                       
                        $query= " UPDATE booking SET NIC='$username',VehicleRno='$reg',VehicleType='$vtype',ServiceType='$stype',Date='$date',time='$time'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: all booking.php");
                        }
          
                    }


                    if(isset($_POST['update'])){
              
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $reg = $_POST['regno'];
                        $vtype = $_POST['vtype'];
                        $stype=$_POST['type'];
                        $date= $_POST['date'];
                        $time=$_POST['time'];
                       
                        $query= " UPDATE booking SET NIC='$username',VehicleRno='$reg',VehicleType='$vtype',ServiceType='$stype',Date='$date',time='$time'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: repair.php");
                        }
          
                    }


                     
                    if(isset($_POST['update'])){
                        
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $reg = $_POST['regno'];
                        $vtype = $_POST['vtype'];
                        $stype=$_POST['stype'];
                        $date= date("Y-m-d");
                    
                        $query= " UPDATE booking SET NIC='$username',VehicleRno='$reg',VehicleType='$vtype',ServiceType='$stype',Date='$date'
                        WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: service&repair.php");
                        }
          
                    } 

                    if(isset($_POST['update'])){
              
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $reg = $_POST['regno'];
                        $vtype = $_POST['vtype'];
                        $stype=$_POST['stype'];
                        $date= date("Y-m-d");
                       
                        $query= " UPDATE booking SET NIC='$username',VehicleRno='$reg',VehicleType='$vtype',ServiceType='$stype',Date='$date'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: service.php");
                        }
          
          
                    }


                    if(isset($_POST['update'])){
              
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $name = $_POST['CName'];                      
                        $email = $_POST['Email'];
                        $contact=$_POST['Contact'];
                        $address=$_POST['Address'];
                        $password = md5($_POST['Password']);
                       
                        $query= " UPDATE user SET NIC='$username',Name='$name',Email='$email',ContactNo='$contact',Address='$address',Password='$password'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: view customer.php");
                        }
                       
                    }
          


                    if(isset($_POST['Update'])){
                
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $name = $_POST['ename'];                      
                        $email = $_POST['Email'];
                        $contact=$_POST['Contact'];
                        $address=$_POST['Address'];
                        $password = md5($_POST['Password']);
                       
                        $query= " UPDATE user SET NIC='$username',Name='$name',Email='$email',ContactNo='$contact',Address='$address',Password='$password'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: view employee.php");
                        }
           
                    }

                    if(isset($_POST['adduser']))
                    {
                            $username = $_POST['NIC'];
                            $name = $_POST['Name'];
                            $email = $_POST['Email'];
                            $contact=$_POST['Contact'];
                            $address=$_POST['Address'];
                            $password = md5($_POST['Password']);
                            $cpassword = md5($_POST['CPassword']);
                            $role=$_POST['role'];

                            $query1 = mysqli_query($con, "INSERT INTO user (NIC,Name,Email ,ContactNo,Address,Password,cpassword,UserType)
                            VALUES('$username','$name','$email','$contact','$address','$password','$cpassword','$role')"
                            ); 

                                    if($query1){
                                    header("location: all User.php");
                                    } 

                    }

                    if(isset($_POST['updateuser'])){
                
                        $id=$_POST['edit_id'];
                        $username = $_POST['NIC'];
                        $name = $_POST['CName'];                      
                        $email = $_POST['Email'];
                        $contact=$_POST['Contact'];
                        $address=$_POST['Address'];
                        $password = md5($_POST['Password']);
                        $role=$_POST['role'];
                       
                        $query= " UPDATE user SET NIC='$username',Name='$name',Email='$email',ContactNo='$contact',Address='$address',Password='$password',UserType='$role'
                         WHERE  id='$id'";
                        $query_run = mysqli_query($con,$query);

                        if($query){
                            header("location: all User.php");
                        }
           
                    }

                    if(isset($_POST['addstock'])){
                            
                        $name = $_POST['name'];
                        $brand = $_POST['brand'];
                        $qty = $_POST['qty'];
                        $price=$_POST['price'];
                        $nic= $_POST['nic'];
                        
                    

                        $query = "INSERT INTO stock (name,brand,quantity ,price,NIC)
                            VALUES('$name','$brand','$qty','$price','$nic')";

                        $query_run= mysqli_query($con,$query);    

                        if($query){
                            header("location: view stock.php");
                        }

                }

                if(isset($_POST['updatestock'])){

                    $id=$_POST['edit_id'];        
                    $name = $_POST['name'];
                    $brand = $_POST['brand'];
                    $qty = $_POST['qty'];
                    $price=$_POST['price'];
                    $cname= $_POST['sname'];
                    
                

                   $query = "UPDATE stock s
                    INNER JOIN  
                     user u
                    ON s.NIC = u.NIC
                    SET s.name='$name',s.brand='$brand',s.quantity='$qty',s.price='$price',u.Name='$cname' WHERE s.id='$id'";

                      
                    $query_run= mysqli_query($con,$query);    

                    if($query){
                        header("location: view stock.php");
                    }

            }


                if(isset($_POST['deleterep']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM booking WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: repair.php");
                    }

                }
                
                if(isset($_POST['deleteser']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM booking WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: service.php");
                    }

                }
        
                
                if(isset($_POST['deletesr']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM booking WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: service&repair.php");
                    }

                }
            
                
                if(isset($_POST['deletecus']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM user WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);
              
                    if($query){
                        header("location: view customer.php");
                    }

                }

                
                if(isset($_POST['deleteemp']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM user WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: view employee.php");
                    }


                }

                
                if(isset($_POST['deletestk']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM stock WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: view stock.php");
                    }


                }
            
                
                if(isset($_POST['deletebook']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM booking WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: all booking.php");
                    }

                }

                
                if(isset($_POST['deleteuser']))
                {
                    $id=$_POST['delete_id'];
                    $query="DELETE  FROM user WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if($query){
                        header("location: all user.php");
                    }

                }

                if(isset($_POST['updateor'])){

                    $id=$_POST['edit_id'];        
                    $qty = $_POST['qty'];
                    $date=date("Y-m-d");
                    
                    $query = "UPDATE stockorder SET oquantity='$qty',ODate='$date' WHERE id='$id'";
                    $query_run= mysqli_query($con,$query); 
                    
                   
                    
                    if($query){
                        header("location:viewstock.php");
                    }
                    
                    }
                  
            ?>
        
        
            

            