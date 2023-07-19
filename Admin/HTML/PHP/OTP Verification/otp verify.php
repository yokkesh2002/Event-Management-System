<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - OTP Page</title>
  <link rel="stylesheet" href="otpcode.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Autofocus Field</title>
	<link rel="stylesheet" type="text/css" href="otpcode.css">
</head>
<body>
	<div class="container">
		<h1>ENTER OTP</h1>
    <form action="#" method="POST">
		<div class="userInput">
			<input type="number" id="otp" class="form-control" name="otp_code" required autofocus>
		</div>
    
    <button type="submit" value="Verify" name="verify">VERIFY</button>
		
	</div>
</form>
</body>
</html>
<!-- partial -->
  <script  src="otpscript.js"></script>

</body>
</html>
<?php 
    include('../connect/connection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            mysqli_query($connect, "UPDATE register SET status = 1 WHERE email = '$email'");
            ?>
             <script>
                 alert("Verfiy account done, you may sign in now");
                   window.location.replace("../../index.php");
             </script>
             <?php
        }

    }

?>
