<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form | CodingNepal</title>
    <link rel="stylesheet" href="css/mailtest.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Show Modal</label>
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Become a Subscriber</header>
      <p>Subscribe to our Club and get the latest updates straight to your inbox.</p>
      <br>
      <p>Club Name: <b>HACKATHON</b></p>
    </div>
    
    <form action="subscribe database.php" method="POST">
    <?php 
    
    $name= "";
    $email = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){
       //if subscribe btn clicked
      require 'PHPMailer/PHPMailerAutoload.php';
    

      $otp = rand(100000,999999);
      $_SESSION['otp'] = $otp;
     
      $name= $_POST["name"];
      $email=$_POST["email"];
  
  
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
      $mail->Subject = "Subscription Mail From TMS";
      $mail->Body    = "<p>Dear <b>$name</b>, </p> <h1>THANK YOU FOR YOUR SUBSCRIPTION <br></h1>
      <p>Your Subscription To <b>HACKATHON</b> Club Has Been Confirmed</p>
      <h2>We Are Consistently Give You More Updates About Upcoming Future Events.<br> As Per Our Schedule: <br>
      We Give You A Free Registration Event Link Instead Of Your Subscription:
      <br><br>
      National Music Fest: 
      <br>
      http://localhost/TMS/HomePage/Candidate/CandidateDashboard/View%20Events/Register/event%20reg.html
      <h2>
      <br><With Regards,</p>
      <b>TMS Team</b>";
  
      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      if(!$mail->send()){
        
          echo "Message could not be sent.";
          echo "Mailer Error: {$mail->ErrorInfo}";
      }
      else
      {
        
          echo '<html>
          <head>
          <style>
          h1 {
            color: red;
            font-size: 24px;
          }
          </style>
          </head>
          <body>
          <h1>Thanks for Subscribing Us</h1>
          </body>
          </html>.';
      }





       
        
          ?>
         
          <?php
        }
      
        ?>
        <!-- show error message if user entered email is not valid -->
        
      
  
    
     


    <div class="field">
        <input type="text" class="name" name="name" placeholder="Name" required value="<?php echo $name ?>">
      </div>
      <div class="field">
        <input type="email" class="email" name="email" placeholder="Email Address" required value="<?php echo $email?>">
      </div>
      <form action="subscribe database.php" method="POST">
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
      </div>
    </form>
    <div class="text">We do not share your information.</div>
  </div>

</body>
</html>
