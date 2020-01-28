<?php

if(isset($_POST['submit'])){
   $email = $_POST['email'];

   require('connection.php');
   
   $insert = "insert into email(email) values('$email')";
   
   mysqli_query($connection,$insert) or die('queryy error');
   
   echo"thanks for your subscription please check your email";
  

   mysqli_close($connection);


}
else{
	
	echo"failed to connect";
}


?>