<!doctype html>
<html>
<head>
	<title>golden pork joint || pork meet || smart pork</title>
  
	<meta name="description" content="we deal with all kind of pork , for meat and breeds">
	<meta name="author" content="golden smart pork">
	<meta charset="utf-8">
	<meta name="keyword" description="meat, pork, akabenzi, icyororo , ingurube">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/loc.png">


<style>


nav{

float:;
background-color:rgb(255,0,0);
width:100%;
height:70px;
padding:0;
clear:both;
margin-right:10px;	
}

nav ul{
text-decoration:none;
list-style-type:none;
margin:0 auto;
margin-left:-40px;

}
nav ul li{
	float:left;
	text-align:center;
	margin:0 auto;
	padding:5px;
	position:relative;
	left:450px;
}
nav ul li a{
text-decoration:none;
margin-bottom:20px;
display:block;
border-bottom: 5px solid white;
color:#ffcc00;
text-align:center;
padding:20px;
font-family:tahoma;
font-size:16px;
text-transform:capitalize;
}
nav ul li a:hover {

background-color:black;
margin:0px;
padding:20px;
border-bottom: 5px solid white;
color:white;
}

h2{

text-align:center;

}
.contact{

text-align:center;
color:#ffcc00;
clear:both;
float:left;

}
.form{
	
	line-spacing:1px;	
	margin:0 auto;
}
.btn_style{
	
	width:406px;
	padding:20px;
	margin:0 auto;
}

table{
	
	padding:0px;
	margin:0;
	width:;
	background-color:#d9d9d9;
	overflow:;
	position:absolute;
	left:0px;
}

td{
	
	padding:2px;
	border-right:1px solid black;
	border-bottom:1px solid black;
}
footer{
	position:relative;
	bottom:-1234px;
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
<h2>our pigs</h2>
</div>

<div class="btn_style" class="signup_btn">





<table>
<thead>
<th>p.name</th>
<th>type</th>
<th>gender</th>
<th>birth</th>
<th>boar</th>
<th>b.origin</th>
<th>mother</th>
<th>m.origin</th>
<th>origin</th>
<th>district</th>
<th>status</th>
<th>sheperd</th>
<th>s.tel</th>
<th>country</th>
<th>feeds</th>
<th>c.origin</th>
<th>docs</th>
</thead>

<tbody>






<?php

require('connection.php');


 /*$id = $_POST['id'];
 $p_name = $_POST['pig_name'];
 $born_date = $_POST['born_date'];
 */
 
 $select = "select * from pig";
 
 $result =  mysqli_query($connection,$select) or die('query not running');

while( $row = mysqli_fetch_array($result)){
	
	$pname = $row['pname'];
	$ptype = $row['ptype'];
	$gender = $row['gender'];
	$bdate = $row['bdate'];
	$bname = $row['bname'];
	$borigin = $row['borigin'];
	$mname = $row['mname'];
	$morigin = $row['morigin'];
	$origin = $row['origin'];
	$district = $row['district'];
	$ostatus = $row['ostatus'];
	$gname = $row['gname'];
	$gtel = $row['gtel'];
	$country = $row['country'];
	$feeds = $row['feeds'];
	$corigin = $row['corigin'];
	$pdoc = $row['pdoc'];
	
	
	echo"<tr>";
echo"<td> $pname </td>" ;   
	
	
	
	
echo"<td>$ptype</td>" ;
 	
echo"<td>  $gender</td>" ;
 echo"<td>$bdate</td>" ;
 echo"<td>$bname</td>" ;
 echo"<td>$borigin</td>" ;
 echo"<td>$mname</td>" ;
 echo"<td>$morigin</td>" ;
 echo"<td>$origin</td>" ;
 echo"<td>$district</td>" ;
 echo"<td>$ostatus</td>" ;
 echo"<td>$gname</td>" ;
 echo"<td>$gtel</td>" ;
 echo"<td>$country</td>" ;
 echo"<td>$feeds</td>" ;
 echo"<td>$corigin</td>" ;
 echo"<td>$pdoc</td>" ;
	echo"</tr>";
	
 }
 





?>



</tbody>


</table>
</div>


</div>
</section>

-->
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