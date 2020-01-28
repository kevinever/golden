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
<li><a href="register1.php" class="active">message</a></li>
</ul>
</div>
</nav>

<section>

<div class="login">
<div class="form">
<form action="forgot.php" method="post">
<p>
<label>username</label>
<input type="text" name="username" >
</p>
<p>
<label>password</label>
<input type="password" name="pass">
</p>
<p>
<input type="submit" name="submit" value="update" class="btn">
<input type="reset" name="reset" value="reset" class="btn">
</p>
<p id="forgot">
<a href="index.php">login</a>
</p>

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
<?php



if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['pass'];



	require('conn.php');
	$update = "update user set password ='hello'";
     mysqli_query($connection, $update);
	 if(!$update){
		 echo"failed";
	 }
	 else{
		 echo"success";
	 }
}
?>