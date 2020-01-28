<html>
<head>
<style>

table{
	
	padding:20px;
	margin:0 auto;
	background-color:#d9d9d9;
	
}

td{
	
	padding:10px;
	border-right:1px solid black;
}

</style>
</head>


<table border=0>
<?php


require('connection.php');

$select = "select * from pigs where id>60";

$run = mysqli_query($connection, $select) or die("query not executed");


while( $row = mysqli_fetch_array($run)){
	
	$id = $row['id'];
	$pname = $row['pig_name'];
	$breed = $row['breed'];
	$bdate = $row['born_date'];
	
	echo"<tr><th>the pig id is</th>"."<td>".$id."</td>";
	echo"<th>the pig name is</th>"."<td>".$pname."</td>";
	echo"<th>the pig breed is</th>"."<td>".$breed."</td>";
	echo"<th>the pig born date is</th>"."<td>".$bdate."</td>"."</tr>";
	
	
	
	/*echo"<tr><th>the pig id is</th>"."<td>".$id."</td>"."<br>";
	echo"<tr><th>the pig id is</th>"."<td>".$id."</td>"."<br>";
	echo"<tr><th>the pig id is</th>"."<td>".$id."</td>"."<br>";
	
	
	
	
	echo"the pig name is: </td></tr>".$pname."<br>";
	echo"the Breed: </td></tr>".$breed."<br>";
	echo"Born date is:  </td></tr>".$bdate."<br>";
	*/
	
}




?>
</table>
</html>