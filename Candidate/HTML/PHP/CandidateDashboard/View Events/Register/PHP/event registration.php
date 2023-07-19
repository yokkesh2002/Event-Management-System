<?php



include('mailtestering2.php');


$f_name = $_POST['f_name'];
$l_name  = $_POST['l_name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$pno = $_POST['pno'];
$year = $_POST['year'];
$event_category= $_POST['event_category'];
$user_profile=$_POST['user_profile'];
$receipt_pic=$_POST['receipt_pic'];
$vhno = $_POST['vhno'];





if (!empty($f_name) || !empty($l_name) || !empty($email) || !empty($branch) || !empty($pno)   || !empty($year)  || !empty($event_category)  || !empty($user_profile) || !empty($receipt_pic) || !empty($vhno) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "event";



// Create conection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('conect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (f_name , l_name ,email, branch , pno , year, event_category, user_profile, receipt_pic, vhno )values(?,?,?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $con->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("ssssissssi", $f_name,$l_name,$email,$branch,$pno,$year,$event_category,$user_profile,$receipt_pic,$vhno);
      $stmt->execute();
      echo "Check Your Mail";
     } else {
      echo "Someone already register using this l_name";
     }
     $stmt->close();
     $con->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
