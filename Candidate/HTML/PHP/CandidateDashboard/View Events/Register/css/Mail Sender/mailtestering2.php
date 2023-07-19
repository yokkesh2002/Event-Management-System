<?php 
    

include('event reg.html');

    $f_name = $_POST['f_name'];
    $l_name  = $_POST['l_name'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $pno = $_POST['pno'];
    $year = $_POST['year'];
    $event_category= $_POST['event_category'];
    $user_profile=$_POST['user_profile'];
    $vhno = $_POST['vhno'];
        
    
    
    
    
    
    //first we leave email field blank
    if(isset($_POST['register'])){
       //if subscribe btn clicked
      require 'PHPMailer/PHPMailerAutoload.php';
    

      
     
  
      $mail=new PHPMailer(True);
  
      //Server settings
      $mail->SMTPDebug =                       //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'yokkesh2002hackerone@gmail.com';                     //SMTP username
      $mail->Password   = 'jyuksnmsqxigqljr';                               //SMTP password
      $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
      $mail->Port       = 587 ;                                    
  
  
      //Recipients
      $mail->setFrom('yokkesh2002hackerone@gmail.com', 'TMS');
      //$mail->addAddress('vh10044_cse19@velhightech.com');     //Add a recipient
      // $mail->addAddress('yokkesh2002hackerone@gmail.com', $email);               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');
  
      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
          //Optional name
      ; //getting user entered email
      //validating user email
      $mail->isHTML(true); 
      $mail->addAddress("$email");                                 //Set email format to HTML
      $mail->Subject = "Registration Mail From TMS";
      $mail->Body    = "<p>Dear $f_name, </p> <h1>THANK YOU FOR YOUR REGISTERING $event_category Event <br></h1>
      <p>Your Registration To $event_category Has Been Confirmed</p> 
      <br><p><With Regards,</p>
      <b>TMS Team</b>";
  
      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      if(!$mail->send()){
        
          echo "Message could not be sent.";
          echo "Mailer Error: {$mail->ErrorInfo}";
      }
      else
      {
        
          echo 'Thanks for Your Registration.';
      }





       
        
          ?>
         
          <?php
        }
      
        ?>
        <!-- show error message if user entered email is not valid -->
        