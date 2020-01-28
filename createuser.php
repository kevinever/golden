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
		.createuser{
			position:relative;
			left:350px;
			width:;
			height:px;
			clear:;
			
			}
			fieldset{
				width:500px;
			box-shadow:2px 0px 5px 0px red;
				text-align:center;
			border-color:gold;
			padding:15px;

		}
			body{
				overflow-x:hidden;
			}
			label{
				float:left;
			}
			input{
				text-align:left;
				
			}
			.pas{
				border-color:red;
				border-radius:20px;
				position:relative;
				right:60px;
				padding:3px;
			}
			#pas{
				position:relative;
				right:80px;
				margin-bottom:30px;
			}
			.btn{
				padding:9px;
				text-align:center;
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
<li><a href="users.php" class="active">users</a></li>
<li><a href="register1.php" class="active">update user</a></li>
<li><a href="home.php" class="active">dashboard</a></li>
</ul>
</div>
</nav>

<section>
<div class="createuser">
<fieldset width="100px"> Enter user Information

<form action="createuser.php" method="post">
<p>
<label for="username">Name</label>
<input type="text" name="uname" required class="pas" autocomplete="off">
</p>
<p>
<label for="password">Password</label>
<input type="password" name="pass" required class="pas" autocomplete="off" id="pas">
<br>
<input type="submit" name="submit" value="submit" class="btn">
<input type="reset" name="reset" value="reset" class="btn">

</p>

</form>


</fieldset>
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
	$username 	=	 $_POST['uname'];
	$password	=	$_POST['pass'];
	require('connection.php');
	
	if($username != "" && $password !="" ){
		
		$insert = "insert into user(username, password) values('$username','$password')";
		mysqli_query($connection, $insert) or die("query cannot be executed");
		echo'<script type="text/javascript">alert("registered successful"); </script>';
	}else{
		echo"all fields are required";
	}
	
}


?>




