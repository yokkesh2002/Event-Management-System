<?php

if(isset($_POST["submit"])){
    
    require 'PHPMailer/PHPMailerAutoload.php';
    

    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    $name=$_POST["name"];
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
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true); 
    $mail->addAddress("$email");                                 //Set email format to HTML
    $mail->Subject = "Subscription Mail From TMS";
    $mail->Body    = "<p>Dear $name, </p> <h1>THANK YOU FOR YOUR SUBSCRIPTION <br></h1>
    <p>Your Subscription To Club Has Been Confirmed</p> 
    <h2>We Are Consistently Give You More Updates About Upcoming Future Events, As Per Our Schedule,We Give You A Free Registration Event Link Instead Of Your Subscription:
    National Music Fest: http://localhost/TMS/HomePage/Candidate/CandidateDashboard/View%20Events/event%20page%20for%20candidate.html
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
        echo 'Message has been sent';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTR-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Mail Test</title>
    </head>
    <body>
       <form action="#" method="post"> 
           <input type="text" placeholder="Enter Name" name="name"><br>
           <input type="email" placeholder="Enter Email" name="email"><br>
           <input type="submit" name="submit" name="submit"><br>
           <a href="thank you page.html">Click Here</a>
           
       </form>
       
          

    </body>
</html>
