<html>

<head>

<?php

if(isset($_POST['submit'])){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	
	require('conn.php');
	
	$insert = "insert into students(first_name,last_name,email) values ('$fname','$lname','$email')";
	
	
	mysqli_query($connection, $insert) or die ('query not executed ');
	
	
	echo"data recorded successfully!!!!";
	
	mysqli_close($connection);
	
	
	
}

?>


</head>
<form action="insert.php" method="POST">
fname:<input type="text" name="fname"><br>
lname:<input type="text" name="lname"><br>
email:<input type="email" name="email"><br>
<input type="submit" name="submit" value="submit">
</form>
</html>