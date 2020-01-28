<!doctype html>
<html>
<head>
	<title>golden pork joint || pork meet || smart pork</title>
  
	<meta name="description" content="we deal with all kind of pork , for meat and breeds">
	<meta name="author" content="golden smart pork">
	<meta charset="utf-8">
	<meta name="keyword" description="meat, pork, akabenzi, icyororo , ingurube">
    <link rel="icon" href="img/loc.png">
	<link rel="stylesheet" href="css/style.css">

<style>
.feed,.cattle,.docs {
	position:relative;
	left:116px;
	border-radius:12px;
}
.feed{
	position:relative;
	left:120px;
}
.cattle{
	position:relative;
	left:65px;
}
.docs{
	position:relative;
	left:39px;
}

.modal-body{
	text-align:left;
	border:1px solid red;
	width:700px;
	position:relative;
	left:290px;
	bottom:20px;
	padding:10px;
	line-spacing:5px;
	word-spacing:5px;
}
label{
	background:;
	text-align:right;
	padding-right:30px;
	text-transform:capitalize;
	float:left;
}
input{
	padding:1px;
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


<header>
<div class="header">
<h1>&spades; golden smart pork outlet joint &spades;</h1>
</div>
</header>

<nav style="height:;">
<div class="heade">
<ul>
<li><a href="index.html">home</a></li>
<li><a href="#">our products</a></li>
<li><a href="register1.php" class="active">register</a></li>
<li><a href="veterinary.php">Veterinary</a></li>
<li><a href="index.php">logout</a></li>
</ul>
</div>
</nav>
<section>
<div class="wraper">
<div class="btn_style" class="login_btn">

</div>

<div class="btn_style" class="signup_btn">
<!--<form action="register1.php" method="POST" class="form">

 Pig Name:<input type="text" name="pig_name"><br>
Pig Breed:<input type="text" name="pig_breed"><br>
born Date:<input type="date" name="born_date"><br>
<input type="submit" name="submit" value="submit">

</form>-->

<h4 style='text-align:center'>ADD NEW PIG</h4>

<div class="modal-body" style='text-align:center'>
<div class="row">
<form method="POST" id='update_std' action="veterinary.php">


<div class="form-group">
<label for="inputdefault">Pig </label>
<input type="text" name="pname" autocomplete="off" style="border-radius:12px;" placeholder="enter pig's name" >
</div>


<div class="form-group">
<label for="inputdefault">medication type</label>
<select class="form-control" name="medtype" required style="position:relative;right:22px;border-radius:12px;">
<option value="">--- Select ---</option>
<option>Oral</option><option>Injection</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault"> Date</label>
<input type="date" class="form-control" name='date' autocomplete="off" placeholder="Enter pig's birth year" style="border-radius:12px;position:relative;right:15px;">
</div>

<div class="form-group">
<label for="inputdefault">quantity</label>
<input type="text" class="form-control" name='quantity' autocomplete="off" placeholder="Enter pig's father names" required style="border-radius:12px;position:relative;right:17px;">
</div>

<div class="form-group">
<label for="inputdefault">veternary</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='vet' autocomplete="off" 
placeholder="Enter pig's father contact" style="position:relative;right:15px;border-radius:12px;">
</div>

<div class="form-group">
<label for="inputdefault">Medication name</label>
<input type="text" class="form-control" name='medname' autocomplete="off" placeholder="Enter pig mother names" required style="position:relative;right:20px;border-radius:12px;">
</div>


<div class="form-group">

<input type="submit" name="submit" value="submit" class="btn btn-info">
<input type="reset" value="close" name="reset" class="btn btn-info">

</div>


</div>
</form>
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






<?php

if(isset($_POST['submit'])){
 $pigName  = $_POST['pname'];
 $medtype  = $_POST['medtype'];
 $date  = $_POST['date'];
 $quantity  = $_POST['quantity'];
 $vet  = $_POST['vet'];
 $medname  = $_POST['medname'];



require('connection.php');
$select = "select pname from pig";
$result = mysqli_query($connection,$select);

while($row = mysqli_fetch_array($result)){
	
	$pname = $row['pname'];
	
if($pigName == $pname){
	$insert = "insert into veterinary (pigName,medtype,date,quantity,vet,medname ) values ('$pigName','$medtype','$date','$quantity','$vet','$medname')";
	mysqli_query($connection,$insert)or die("query cannot be executed");
    echo'<script type="text/javascript">alert("treatment inserted");</script>';

	
}
//	echo"$pname";
}		

mysqli_close($connection);
}
?>


