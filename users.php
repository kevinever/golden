<!doctype html>
<html>
<head>
	<title>golden pork joint || pork meet || smart pork</title>
  
	<meta name="description" content="we deal with all kind of pork , for meat and breeds">
	<meta name="author" content="golden smart pork">
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<meta name="keyword" description="meat, pork, akabenzi, icyororo , ingurube">
   
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.css">
     <link rel="icon" href="img/loc.png">

	<style>
		table{
			margin:0 auto;
			
		}
		table th{
			padding-bottom:10px;
		}
		table td{
			padding:5px;
		}
		ul{
			position:relative;
			top:20px;
		}
	</style>
</head>



<body>

<header>
<div class="header">
<h1>&spades; golden smart pork outlet joint &spades;</h1>
</div>
</header>

<nav>
<div class="heade">
<ul>
<li><a href="createuser.php" class="active">create user</a></li>
<li><a href="register1.php" class="active">update user</a></li>
<li><a href="home.php" class="active">dashboard</a></li>
</ul>
</div>
</nav>

<section>
<table>
<thead>
<th> Names </th>
<th> action </th>

</thead>
<tbody>
<?php

require('connection.php');
$select	=	"select * from user";
$result	=	mysqli_query($connection, $select);
while($row	=	mysqli_fetch_array($result)){
	
	$users = $row['username'];
	
	echo"<tr>";
	echo"<td>"."$users"."</td>";
	echo"<td>"."delete"."</td>";
	echo"</tr>";
	
}


?>
</tbody>
</table>
</form>

</div>
</div>


</section>
<footer>
<div class="container">
<div class="row">
<div class="col-1">copyright &copy; 2020<br>copyright &copy; 2020<br>copyright &copy; 2020<br>copyright &copy; 2020<br></div>

<div class="col-2">   our links<br>facebook <span class='icon'>&hearts;</span><br>twiter <span class='icon'>&diams;</span><br>instagram  <span class='icon'>&clubs;</span>     </div>
<div class="col-3">     <p>subscribe for more updates    </p><form action="email.php" method="post"><p>Email:</p><p><input type="email" name="email">    <a href="email.php"><input type="submit" name="submit" value="subscribe"></a> </p></form></div>
<div class="col-4">   follow us on:   </div>
</div>

<div class="contact"><hr>
+250786887878 || +12345678904</div>
</div>
</footer>
</body>
</html>





