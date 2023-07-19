<?php


$con = mysqli_connect("localhost", "root", "", "admin_dashboard"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>