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
	left:16px;
	border-radius:12px;
}
.feed{
	position:relative;
	left:20px;
}
.cattle{
	position:relative;
	left:-33px;
}
.docs{
	position:relative;
	left:-58px;
}

.modal-body{
	text-align:left;
	border:1px dashed red;
	width:700px;
	position:relative;
	left:490px;
	bottom:20px;
	padding:10px;
	line-spacing:5px;
	word-spacing:5px;
}
nav{
	height:510px;
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
ul{
	position:relative;
	top:20px;
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
<li><a href="index.php">home</a></li>
<li><a href="pro.php">our products</a></li>
<li><a href="register1.php" class="active">register</a></li>
<li><a href="veterinary.php">Veterinary</a></li>
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
<form method="POST" action="home.php">


<div class="col-md-4">
<div class="form-group">
<label for="email">Pig Names</label>
<input type="text" style="position:relative;right:2px;border-radius:12px;" class="form-control" name='pname' autocomplete="off" placeholder="Enter pigs names" required>
</div>

<div class="form-group">
<label for="inputdefault">Pig type</label>
<select class="form-control" name="type" required style="position:relative;right:16px;border-radius:12px;">
<option value=''>--- Select ---</option><option>Land Race Breed</option><option>Duroc Breed</option><option>Pietre Breed</option><option>Local breed</option><option>Hamshire Breed</option><option>Other</option></select>
</div>


<div class="form-group">
<label for="inputdefault">Gender</label>
<select class="form-control" name="gender" required style="position:relative;right:22px;border-radius:12px;">
<option value="">--- Select ---</option>
<option>Boar</option><option>Sow</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Birth Date</label>
<input type="date" class="form-control" name='byear' autocomplete="off" placeholder="Enter pig's birth year" style="border-radius:12px;position:relative;right:15px;">
</div>

<div class="form-group">
<label for="inputdefault">Boar's Names</label>
<input type="text" class="form-control" name='bnames' autocomplete="off" placeholder="Enter pig's father names" required style="border-radius:12px;position:relative;right:17px;">
</div>

<div class="form-group">
<label for="inputdefault">Boar's origin</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='borigin' autocomplete="off" 
placeholder="Enter pig's father contact" style="position:relative;right:15px;border-radius:12px;">
</div>

<div class="form-group">
<label for="inputdefault">Mother Names</label>
<input type="text" class="form-control" name='monames' autocomplete="off" placeholder="Enter pig mother names" required style="position:relative;right:20px;border-radius:12px;">
</div>

<div class="form-group">
<label for="inputdefault">Mother Origin</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)"  name='moorigin' autocomplete="off" placeholder="Enter pig mother contact" style="position:relative;right:17px;border-radius:12px;">
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Origin</label>
<select class="form-control" name="province" id="province" onChange="districtDefine(this)" required style="position:relative;right:17px;border-radius:12px;">
<option value="">--- Select ---</option>
<option>Locally</option><option>Outside</option><option>other</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">District</label>
<select class="form-control" name="district" id="parent_district" required style="position:relative;right:18px;border-radius:12px;">
<option value="-">Select District</option>
<option value="-">Nyarugenge</option>
<option value="-">Gasabo</option>
<option value="-">Kicukiro</option>
</select></div>


<div class="form-group">
<label for="inputdefault">Orphan Status</label>
<select class="form-control" name="orphan" required style="position:relative;right:60px;">
<option value="">--- Select ---</option>
<option>None</option><option>Father</option><option>Mother</option><option>All</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">Guardian Names</label>
<input type="text" class="form-control" name='gnames' autocomplete="off" placeholder="Enter guardian names" style="border-radius:12px;position:relative;right:31px;">
</div>

<div class="form-group">
<label for="inputdefault">Guardian Phone No</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='gphoneno' autocomplete="off" placeholder="Enter guardian phone no" style="position:relative;right:48px;border-radius:12px;">
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Country of Origin</label>
<select class="form-control" name="nati" required style="position:relative;right:83px;">
<option>RWANDA</option><option>BURUNDI</option><option>DRC</option><option>UGANDA</option><option>TANZANIA</option><option>OTHER</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault" style="position:relative;left:0px;">Feeds</label>
<input type="text" class="feed" name='sponsor' autocomplete="off" placeholder="Specify pig's feeds">
</div>

<div class="form-group">
<label for="inputdefault" style="position:relative;left:0px;margin-top:2px;">Cattle of Origin</label>
<input type="text" class="cattle" name='origin' autocomplete="off" placeholder="Specify school of origin" required>
</div>

<div class="form-group">
<label for="inputdefault" class="pdoc" style="position:relative;left:0px;">Presented Documents</label>
<input type="text" class="docs" name='docs' autocomplete="off" placeholder="Specify presented documents" required style="border-radius:12px;position:relative;right:5px;">
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