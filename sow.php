<!doctype html>
<html>
<head>
	<title>golden pork joint || pork meet || smart pork</title>
  
	<meta name="description" content="we deal with all kind of pork , for meat and breeds">
	<meta name="author" content="golden smart pork">
	<meta charset="utf-8">
	<link rel="icon" href="img/loc.png">
	<meta name="keyword" description="meat, pork, akabenzi, icyororo , ingurube">
	<link rel="stylesheet" type="text/css" href="css/style.css">


<style>


nav{

}

nav ul{
position:relative;
top:30px;

}
footer{

}
table {
	margin:0 auto;
	padding:10px;
}
th{
	padding:10px;
	border-right:1px dashed red;
}
td{
	background:rgba(255,0,0,0.5);
}
</style>



<script>
let submit = document.getElementById('butt');

submit.addEventListener('click',function(){
	console.log("it works");
alert("records added successfully");
	
});
</script>
</head>



<body>


<?php

if(isset($_POST['submit'])){
	
	
	
	$pname = $_POST['pig_name'];
	$pbreed = $_POST['pig_breed'];
	$born = $_POST ['born_date'];
	md5("$born");
	
	
	require("connection.php");
	
	$insert = "insert into pigs(pig_name, breed, born_date) values ('$pname','$pbreed','$born')";
	
	mysqli_query($connection, $insert) or  die('query notexecuted');
	
	echo md5("wowwwwww you the best");
	
	mysqli_close($connection);
	
	
}


?>



<header>
<div class="header">
<h1>&spades; golden smart pork outlet joint &spades;</h1>
</div>
</header>

<nav>
<div class="heade">
<ul>
<li><a href="home.php">home</a></li>
<li><a href="#">our products</a></li>
<li><a href="#" class="active">register</a></li>
<li><a href="#">contact</a></li>
</ul>
</div>
</nav>

<section>
<div class="wraper">
<div class="btn_style" class="login_btn">
<h2>our Sows</h2>
</div>

<div class="btn_style" class="signup_btn">





<table>
<thead>
<th>name</th>

<th>type</th>

<th>gender</th>
<th>sheperd</th>
<th>s.tel</th>
<th>country</th>

</thead>

<tbody>

<?php
require('connection.php');

$select = "select * from pig where gender='sow'";
$result = mysqli_query($connection,$select);

 while($row = mysqli_fetch_array($result)){
	 
	$pname = $row['pname'];
	$ptype = $row['ptype'];
	$boar =  $row['gender'];
	$gname =  $row['gname'];
	$gtel =  $row['gtel'];
	$country =  $row['country'];
	 
	 echo"<tr>";

	 echo"<td>"."$pname"."</td>";
	 echo"<td>"."$ptype"."</td>";
	 echo"<td>"."$boar"."</td>";
	 echo"<td>"."$gname"."</td>";
	 echo"<td>"."$gtel"."</td>";
	 echo"<td>"."$country"."</td>";
	 
	 
	 
	 
	 echo"</tr>";
	 
 }




?>





</tbody>


</table>
</div>


</div>
</section>
<footer>
<div class="container">
<div class="row">
<div class="col-1">copyright &copy; 2020<br>copyright &copy; 2020<br>copyright &copy; 2020<br>copyright &copy; 2020<br></div>

<div class="col-2">   our links<br>facebook <span class='icon'>&hearts;</span><br>twiter <span class='icon'>&diams;</span><br>instagram  <span class='icon'>&clubs;</span>     </div>
<div class="col-3">     <p>subscribe for more updates    </p><p>Email:</p><p><input type="text" >    <button><a href="">subscribe</a></button>    </p></div>
<div class="col-4">   follow us on:   </div>
</div>

<div class="contact"><hr>
+250786887878 || +12345678904
</div></div>
</footer>






</body>
</html>