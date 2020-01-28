<?php


$connection =mysqli_connect("localhost","root","","university");

if(!$connection){
	
	echo"connection failed".mysqli_connect_error();
	
} 

echo"congrats";

?>