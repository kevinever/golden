<?php

require('connection.php');


 /*$id = $_POST['id'];
 $p_name = $_POST['pig_name'];
 $born_date = $_POST['born_date'];
 */
 
 $select = "select * from pigs";
 
 $result =  mysqli_query($connection,$select) or die('query not running');

while( $row = mysqli_fetch_array($result)){
	
	$id = $row['id'];
	$pname = $row['pig_name'];
	$breed = $row['breed'];
	$bdate = $row['born_date'];
	
	echo"<tr><th>the pig id is</th>"."<td>".$id."</td>";
	echo"<th>the pig name is</th>"."<td>".$pname."</td>";
	echo"<th>the pig breed is</th>"."<td>".$breed."</td>";
	echo"<th>the pig born date is</th>"."<td>".$bdate."</td>"."</tr>";
 }
 





?>