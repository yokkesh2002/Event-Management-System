<?php


$con = mysqli_connect("localhost", "root", "", "admin_dashboard"); //conection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to conect: " . mysqli_connect_errno();
}

?>