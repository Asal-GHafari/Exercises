<?php 
// Create connection
	$con=mysqli_connect("localhost","root","","product");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else { echo "Connection was OK!\n";}

$name=$_GET["name"]);

?>