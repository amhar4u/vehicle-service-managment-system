<?php
      include 'header.php';

      $con=mysqli_connect("localhost","root","","tusco");

    if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    
            $name = $_POST['name'] ;
            $email = $_POST['email'] ;
            $subject = $_POST['subject'] ;
            $message = $_POST['message'] ;
    
            $query =  "insert into review (name,email,subject,message) values('$name', '$email', '$subject', '$message')";
            $run = mysqli_query($conn, $query) or die(mysqli_error());
    
    
    
        }else{
            echo "all fields required" ;
        }
    }
    ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>For Suggest Your Reviwes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p>6 days, 7:30 - 7:00</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+94771168714</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>tuscoservice@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <form  action="" method="post" >
                        <input type="text" class="form-control" name="name"  placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                         <br>
                        <input type="email" class="form-control" name="email"  placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <br>
                        <input type="text" class="form-control" name="subject"  placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <br>
                        <textarea class="form-control" name="message"  placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <br>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton" name="submit">Send Message</button>
                        <br>
                        </form>
                
                    </div>
                        <div class="a custom-loc"> 
                            
                            <a href="https://www.google.lk/maps/place/Tusco+service+center/@8.1137425,79.6004534,12z/data=!4m9!1m2!2m1!1snear+service+center!3m5!1s0x3afd6d501ab02393:0x61fce9efafd0c289!8m2!3d8.1137505!4d79.732297!15sChNuZWFyIHNlcnZpY2UgY2VudGVykgEIY2FyX3dhc2g">
                           <img src="img\location.jpeg"> </a> 
                            <br><h4 class="line"> Click Image To Go Through The Location</h4>
                        </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php
          include 'footer.php';
        ?>
