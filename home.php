<!doctype html>
<html>
<head>
	<title>golden pork joint || pork meet || smart pork</title>
  
	<meta name="description" content="we deal with all kind of pork , for meat and breeds">
	<meta name="author" content="golden smart pork">
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=2">
	<meta name="keyword" content="meat, pork, akabenzi, icyororo , ingurube">
   
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.css">
     <link rel="icon" href="img/loc.png">
	 <style>
	 body{
		 overflow-x:hidden;
	 }
	 
table{
	position:relative;
	left:10px;
	margin:;
}	
	table td{
	cursor:pointer;
	border:1px solid red;	
   padding:15px;
	margin:10px;
   word-spacing:10px;
	box-shadow:0px 5px 0px 2px red ;
	text-transform:capitalize;
		 
	 }
	table td:hover{
	cursor:pointer;
	border:1px solid blue;	
   padding:15px;
	text-transform:capitalize;
   word-spacing:10px;
   color:red;
	box-shadow:0px 5px 2px 2px gold ;
		 
	 }
	 a{
		 text-decoration:none;
		 color:black;
		 padding:10px;
	 }
	ul{
		position:relative;
		top:10px;
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
<li><a href="#">our services</a></li>
<li><a href="pro.php" name="products" class="products">our pigs</a></li>
<li><a href="register1.php" class="active">New Pig</a></li>
<li><a href="#">contact</a></li>
<li><a href="index.php">logout</a></li>
</ul>
</div>
</nav>

<section>

<p><h2>Golden Farm Stock </h2>
<div class="">
<table>
<thead>


</thead>
<tbody>
<tr>
<td style=""><a href="users.php">5 Users</a></td>
<td><a href="pro.php">101 Pigs</a></td>
<td><a href="users.php"><a href="boars.php">90 Boars</a></td>
<td><a href="users.php"><a href="sow.php">200 Sow</a></td>
<td><a href="users.php"> 300 sold</a></td>
<td><a href="users.php"> 20 sick</a></td>
<td> <a href="users.php">20 castrates</a></td>
<td><a href="users.php">4 farms</a></td>
<td><a href="users.php">12 demands</a></td>
</tr>

</tbody>

</table>



</div>

</p>



<p id='para'><h2>Golden Farm Toolkit </h2><div class="">
<table>
<thead>


</thead>
<tbody>
<tr>
<td style="">5 Tanks</td>
<td>10 Machettes</td>
<td>90 Boars</td>
<td>200 Sow</td>
<td> 300 sold</td>
<td> 20 sick</td>
<td> 20 castrates</td>
<td>4 farms</td>
<td>12 demands</td>
</tr>

</tbody>

</table>
</p>
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


<?php
	
	if(isset($_POST['submit'])){
		
		$pname	=	$_POST['pname'];
		$type		=	$_POST['type'];
		$gender		=	$_POST['gender'];
		$byear		=	$_POST['byear'];
		$bnames		=	$_POST['bnames'];
		$borigin	=	$_POST['borigin'];
		$monames	=	$_POST['monames'];
		$moorigin 	= 	$_POST['moorigin'];
		$province 	= 	$_POST['province'];
		$district 	= 	$_POST['district'];
		$orphan	 	=	$_POST['orphan'];
		$gnames		=	$_POST['gnames'];
		$gphoneno	=	$_POST['gphoneno'];
		$nati		= 	$_POST['nati'];
		$sponsor	=	$_POST['sponsor'];
		$origin		=	$_POST['origin'];
		$docs		=	$_POST['docs'];
		
		
		require('connection.php');
		
		$insert = "insert into pig(pname,ptype,gender,bdate,bname,borigin,mname,morigin,origin,district,ostatus,gname,gtel,country,feeds,corigin,pdoc) values('$pname','$type','$gender','$byear','$bnames','$borigin','$monames','$moorigin','$province','$district','$orphan','$gnames','$gphoneno','$nati','$sponsor','$origin','$docs')";
		
		$result = mysqli_query($connection , $insert) or die (" query cannot be executed");
		
		if($result){
			echo'<script type="text/javascript"> alert("record inserted successfully");';
		}
		else{
			echo'<script type="text/javascript"> alert("record insert failed");';
			
		}
		
		
	}
	
	?>
