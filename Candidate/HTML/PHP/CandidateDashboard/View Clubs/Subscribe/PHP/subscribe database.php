<?php

$name = $_POST['name'];
$email = $_POST['email'];


include('mailtestering.php');



if (!empty($name)  || !empty($email))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "club";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From subscribe Where email = ? Limit 1";
  $INSERT = "INSERT Into subscribe (name,email  )values(?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $name,$email);
      $stmt->execute();
      echo "<html>
      <head>
      <style>
      h1 {
        color: red;
        font-size: 30px;
      }
      </style>
      </head>
      <body>
      <h1>Check Your Mail!!!</h1>
      </body>
      </html>.";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
