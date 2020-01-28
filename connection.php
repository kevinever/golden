<?php


$connection = mysqli_connect("localhost","root","","pork");

if(!$connection){
	
	echo"failed to connect to database".mysqli_connect_error();
	
}
?>