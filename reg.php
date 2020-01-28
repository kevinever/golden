<!doctype>
<html>
<head>
<title>reg</title>
</head>
<body>
<h4 style='text-align:center'>ADD NEW PIG</h4>

<div class="modal-body" style='text-align:center'>
<div class="row">
<form method="POST" id='update_std' action="reg.php">

<div class="col-md-4">
<div class="form-group">
<label for="email">Pig Names</label>
<input type="text" class="form-control" name='pname' autocomplete="off" placeholder="Enter pigs names" required>
</div>

<div class="form-group">
<label for="inputdefault">Pig type</label>
<select class="form-control" name="type" required>
<option value=''>--- Select ---</option><option>Land Race Breed</option><option>Duroc Breed</option><option>Pietre Breed</option><option>Local breed</option><option>Hamshire Breed</option><option>Other</option></select>
</div>


<div class="form-group">
<label for="inputdefault">Gender</label>
<select class="form-control" name="gender" required>
<option value="">--- Select ---</option>
<option>Boar</option><option>Female</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Birth Date</label>
<input type="date" class="form-control" name='byear' autocomplete="off" placeholder="Enter pig's birth year">
</div>

<div class="form-group">
<label for="inputdefault">Boar's Names</label>
<input type="text" class="form-control" name='bnames' autocomplete="off" placeholder="Enter student father names" required>
</div>

<div class="form-group">
<label for="inputdefault">Boar's origin</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='borigin' autocomplete="off" 
placeholder="Enter student father contact">
</div>

<div class="form-group">
<label for="inputdefault">Mother Names</label>
<input type="text" class="form-control" name='monames' autocomplete="off" placeholder="Enter pig mother names" required>
</div>

<div class="form-group">
<label for="inputdefault">Mother Origin</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)"  name='moorigin' autocomplete="off" 
placeholder="Enter pig mother contact">
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Origin</label>
<select class="form-control" name="province" id="province" onChange="districtDefine(this)" required>
<option value="">--- Select ---</option>
<option>Locally</option><option>Outside</option><option>other</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">District</label>
<select class="form-control" name="district" id="parent_district" required>
<option value="-">Select District</option>
</select></div>


<div class="form-group">
<label for="inputdefault">Orphan Status</label>
<select class="form-control" name="orphan" required>
<option value="">--- Select ---</option>
<option>None</option><option>Father</option><option>Mother</option><option>All</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">Guardian Names</label>
<input type="text" class="form-control" name='gnames' autocomplete="off" placeholder="Enter guardian names">
</div>

<div class="form-group">
<label for="inputdefault">Guardian Phone No</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='gphoneno' autocomplete="off" 
placeholder="Enter guardian phone no">
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Country of Origin</label>
<select class="form-control" name="nati" required>
<option>RWANDA</option><option>BURUNDI</option><option>DRC</option><option>UGANDA</option><option>TANZANIA</option><option>OTHER</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Feeds</label>
<input type="text" class="form-control" name='sponsor' autocomplete="off" placeholder="Specify pig's feeds">
</div>

<div class="form-group">
<label for="inputdefault">Cattle of Origin</label>
<input type="text" class="form-control" name='origin' autocomplete="off" placeholder="Specify school of origin" required>
</div>

<div class="form-group">
<label for="inputdefault">Presented Documents</label>
<input type="text" class="form-control" name='docs' autocomplete="off" placeholder="Specify presented documents" required>
</div>

<div class="form-group">

<input type="submit" name="submit" value="submit" class="btn btn-info">
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</div>
</form>
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

