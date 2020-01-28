
<!DOCTYPE html>
<head>
<link rel="SHORTCUT ICON" href="view/img/ns.png"/>
<title>NOSTRESS ..::</title>  
<meta charset="utf-8">
<meta name="keywords" content="NOSTRESS">
<meta name="description" content="NOSTRESS v1 is an awesome solution for schools that digitizes existing paper-based and spreadsheets system into an all-in-one automated and database driven solution">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='view/awesome/css/font-awesome.css' rel='stylesheet'/>
<link rel="stylesheet" href="view/css/bootstrap.min.css">

<script src="view/js/jquery.min.js"></script>
<script src="view/js/bootstrap-typeahead.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/check.js"></script>
<script src="view/js/autoload_prov.js"></script>
<script type="text/javascript" src="view/js/jquery-dynamic-form.js"></script>

<script type="text/javascript">
$("#kist").autocomplete("autocomplete.php", 
{
selectFirst: true
});
</script>

<!-- Start required PURE CSS Menu Maker markup for head tag -->
<link href="cm-style.css" rel="stylesheet" type="text/css">
<!-- End required PURE CSS Menu Maker markup for head tag -->

<style type="text/css">
body,html
{
background-color: rgb(214, 213, 240);
}


#statisti td,th
{
font-size: 11pt;
padding:8px;
text-align: center;
width:140px;
}

#statisti th:hover
{
background-color: rgb(214, 213, 240);
}

#solo
{
background-color: #F4F4F4;
}

#stati:hover
{
background-color: khaki;
color:#1C94C4;
}

#seto input
{
color:#1C94C4;
}

#dope:hover,#dope input:hover
{
color: #1C94C4;
}

#sta
{
color:#1C94C4;
font-size:14pt;
}

#comma:hover
{
background-color: #F4F4F4;
color:#1C94C4;
}


#update_std input
{
color:#1C94C4;
}

#info tr:hover
{
background-color: #1C94C4;
color:white;
}
</style>

<script type="text/javascript">
function dispSitting(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("sitting").innerHTML=xmlhttp.responseText.trim();
}
}
xmlhttp.open("GET","autositting.php?q="+str,true);
xmlhttp.send();
}



function wordCounter(num)
{
var msgo="msg"+num;
var divo="numofwords"+num;

var content=document.getElementById(msgo).value;
var count=content.length;
var numsms=Math.ceil(count/159);
if(numsms==1)
{
document.getElementById(divo).innerHTML=count+" characters: "+numsms+" message";
}

else
{
document.getElementById(divo).innerHTML=count+" characters: "+numsms+" messages";
}
}


function autoStaff(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("eminesta").innerHTML=xmlhttp.responseText.trim();
}
}
xmlhttp.open("GET","autostaff.php?key=1&q="+str,true);
xmlhttp.send();
}



function autoStudent(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("norbert").innerHTML=xmlhttp.responseText.trim();
}
}
xmlhttp.open("GET","autostudent.php?q="+str,true);
xmlhttp.send();
}


function filterUseFiles(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("listof_files").innerHTML=xmlhttp.responseText.trim();
}
}
xmlhttp.open("GET","filter_files.php?q="+str,true);
xmlhttp.send();
}



function autoSearchFile(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("listof_files").innerHTML=xmlhttp.responseText.trim();
}
}
xmlhttp.open("GET","autosearchfiles.php?q="+str,true);
xmlhttp.send();
}


function fetchStdData(str,num,input,div)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById(div).innerHTML=xmlhttp.responseText.trim();
document.getElementById(input).value="";
document.getElementById("resulto").innerHTML="";

if(num==1){
document.getElementById("desti").focus();
}

else if(num==2){
document.getElementById("marks").focus();
}

else if(num==3){
document.getElementById("decision").focus();
}
}
}

var num=num;
xmlhttp.open("GET","auto_disp.php?key="+num+"&q="+str,true);
xmlhttp.send();
}



function confirmReduce()
{
var red_marks=document.getElementById("marks").value;
var reason=document.getElementById("reason").value;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("resulto").innerHTML=xmlhttp.responseText.trim();
document.getElementById("input_disp").value="";
document.getElementById("input_disp").focus();
}
}

xmlhttp.open("GET","auto_insert.php?marks="+red_marks+"&reason="+reason,true);
xmlhttp.send();
}



function listPrevClasses(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("prevclasses").innerHTML=xmlhttp.responseText.trim();
}
}

xmlhttp.open("GET","prevclasses.php?q="+str,true);
xmlhttp.send();
}



function confirmReduce2()
{
var red_marks=document.getElementById("marks2").value;
var reason=document.getElementById("reason2").value;
var status=document.getElementById("sendo").value;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("resulto2").innerHTML=xmlhttp.responseText.trim();
document.getElementById("input_disp2").value="";
document.getElementById("input_disp2").focus();
}
}

xmlhttp.open("GET","auto_insert.php?marks="+red_marks+"&reason="+reason+"&status="+status,true);
xmlhttp.send();
}


function cursorFocus()
{
document.getElementById("input_permi").focus();
}



function activateStartUp()
{
var maxpoint=document.getElementById("maxpoint").value;
var curr_marks=document.getElementsByName("marks[]");

if(maxpoint=="")
{
for(var i=0;i<curr_marks.length;i++)
{
curr_marks[i].disabled=true;
document.getElementById("load").disabled=true;  
}    
}

else
{
for(var i=0;i<curr_marks.length;i++)
{
curr_marks[i].disabled=false;
document.getElementById("load").disabled=false; 
}     
}
}

function autoValidateMarksEntryForm()
{
var maxpoint=document.getElementById("maxpoint").value;
var curr_marks=document.getElementsByName("marks[]");
var warn=document.getElementsByName("warning[]");
var count=0;

for(var i=0;i<curr_marks.length;i++)
{
if(parseFloat(curr_marks[i].value)>parseFloat(maxpoint))
{
curr_marks[i].style.color="red";
warn[i].innerHTML="Enter Marks Less Than "+maxpoint;
warn[i].style.color="red";
document.getElementById("load").disabled=false;
} 

else
{
curr_marks[i].style.color="blue";
warn[i].innerHTML=""; 

if(count==curr_marks.length-1)
{
document.getElementById("load").disabled=false;
return true;
}

else
{
document.getElementById("load").disabled=false;
}
count++; 
}        
}
}

function deleteFile()
{
var x;
x=confirm('Do you really want to permanently delete the selected file?');
if(x==true)
{
return true;
}

else
{
return false;
}
}


function confirmNotifyAbsent()
{
var x;
x=confirm('Do you really want to sent notifications SMS to parents with absent students?');
if(x==true)
{
return true;
}

else
{
return false;
}
}
</script>

<script type="text/javascript">
function autoAttendance(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("data").value="";
document.getElementById("data").focus();
document.getElementById("content").innerHTML=xmlhttp.responseText.trim();
}
}

xmlhttp.open("GET","auto_attendance.php?q="+str,true);
xmlhttp.send();
}

function setFocus()
{
document.getElementById("data").focus();
}



function dispCourses(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("contotea").innerHTML=xmlhttp.responseText.trim();
}
}

xmlhttp.open("GET","dispcourses.php?q="+str,true);
xmlhttp.send();
}



function loadClasses(str)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}

else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("showstati").innerHTML=xmlhttp.responseText.trim();
}

else
{
document.getElementById("showstati").innerHTML="Please wait...";
}
}

xmlhttp.open("GET","loadstati.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>

<body onload="activateStartUp()" onclick='setFocus()'>
<div class="container" style="padding:0px;height:100%">
<div class="col-md-3" style="background-color: rgb(214, 213, 240);">
<a href='cpanel.php'>
<img src="view/stf_pics/nopic.png" style="width:50%;padding-bottom: 10px" class="img-responsive img-circle"></a>

<b><font color="#1C94C4">NYAYIHA Kevin</font><br> 
<font color='green'>TEACHER</font>&nbsp; 
<a href="#" data-toggle="modal" data-target="#logout" style="background-color: white;color:red;padding:3px;border-radius: 5px">Logout</a></b><br><br>

<!-- Start required PURE CSS Menu Maker markup for body tag -->
<ul id="cm-nav" class="list-group" style="width:55%">
   <li><a href="cpanel.php">HOME</a></li>

   
   

   


   

   


   


      
   <li><a href="#" class="arrow no-click">MARKS</a>
      <ul>
         <li><a href="#" data-toggle="modal" data-target="#marks_entry">Marks Entry</a></li>

               </ul>
   </li>

   <li><a href="#" class="arrow no-click">FILES MANAGER</a>
      <ul>
         <li><a href="#" data-toggle="modal" data-target="#sendfile">Send File To A Staff</a></li>
         <li><a href="#" data-toggle="modal" data-target="#newfile">Upload New File</a></li>
         <li><a href="cpanel.php?myfiles">View My Files</a></li>
         
      </ul>
   </li>

   <li><a href="#" class="arrow no-click">SETTINGS</a>
      <ul>

         <li><a href="#" data-toggle="modal" data-target="#changepwd">Change Password</a></li>
         <li><a href="#" data-toggle="modal" data-target="#logout">Logout</a></li>
      </ul>
   </li>
</ul>
<!-- End required PURE CSS Menu Maker markup for body tag -->
<br>

</div>

<div class="col-md-7" style="border:0px solid white;background-color: white;padding:0px">

<div style="background-color: #1C94C4;padding: 10px">
<span style="font-size:18pt;font-weight: bold;color:white">
<center>SAINT JOSEPH INTEGRATED TECHNICAL COLLEGE<br> <span style='font-size:14pt;color:yellow'>(SJITC - NYAMIRAMBO)</span></center></span>

</div>
<div class="table-responsive" style="border:1px solid transparent;padding: 5px">

<div id='damour'></div>

<br>


<div style="padding:5px">
<center><br><br><br><br>
<span style="color:white;font-size:23pt;font-family: ALGERIAN;background-color: #1C94C4;border-radius: 8px;padding:5px">&nbsp;<b>NOSTRESS</b>&nbsp;</span><br><br>
<span style="color:#1C94C4;font-size:11pt"><b>" Education is not the learning of facts but training of the mind to think! "</b></span>
</center>
</div>
<br>
</div>
</div>


<div class="col-md-2" style="padding:0px;background-color: white" align="center">
<img src="view/img/logo.png" class="img-responsive" style="width:59%">

<div style='background-color:#1C94C4;color:white;padding:8px' align="center"><b>A2 TODAY'S<br> ATTENDANCE STATUS</b></div>

</div>
</div>



<div class="modal fade" id="tocrede" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY CREDENTIALS</h5></div>

<div class="modal-body" style='text-align:left'>
<div class="alert alert-info">
Do you really want to send notifications SMS to all staffs about their credentials?<br>

<a href="cpanel.php?notify_crede" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> YES</a> 
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> NO</button>

</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="logout" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 class="modal-title" style="color:red;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-off"></i> LOG OUT</h5></div>

<div class="modal-body" style='text-align:left'>
<div class="alert alert-danger">
Do you really want to close your session?

<a href="logout.php" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> YES</a> 
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> NO</button>

</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="changepwd" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-lock"></i> CHANGE PASSWORD</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Existing Password</label>
<input type="password" class="form-control" name='oldpwd' autocomplete="off" placeholder="Type existing password" required>
</div>

<div class="form-group">
<label for="inputdefault">New Password</label>
<input type="password" class="form-control" name='newpwd1' autocomplete="off" placeholder="Type new password" required>
</div>

<div class="form-group">
<label for="inputdefault">Confirm New Password</label>
<input type="password" class="form-control" name='newpwd2' autocomplete="off" placeholder="Re-type new password" required>
</div>

<div class="form-group">
<button type="submit" name="update_pwd" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>	
</div>
</form>
</div>
</div>
</div>
</div>




<div class="modal fade" id="settings" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-pencil"></i> SETTINGS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" id='seto'>
<div class="form-group">
<label for="inputdefault">Current Term</label>
<input type="number" class="form-control" name='currterm' value="3" max=3 min=1 autocomplete="off" placeholder="Specify current term" required>
</div>

<div class="form-group">
<label for="inputdefault">Current Period</label>
<input type="number" class="form-control" max=2 min=1 name='currperio' value="1" autocomplete="off" placeholder="Specify current period" required>
</div>

<div class="form-group">
<label for="inputdefault">SMS Title</label>
<input type="text" class="form-control" maxlength="11" name='smstitle' value="SJITC" autocomplete="off" placeholder="Specify SMS Title" required>
</div>

<div class="form-group">
<label for="inputdefault">Late Hour for Teachers</label>
<input type="text" class="form-control" name='latehour' value="07:30:00" autocomplete="off" placeholder="Specify late hour for teachers" required>
</div>

<div class="form-group">
<button type="submit" name="update_settings" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>	
</div>
</form>
</div>
</div>
</div>
</div>




<div class="modal fade" id="newclasses" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-plus"></i> CREATE NEW CLASSES</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="table-responsive">
<table border="0" cellspacing="0" id="alvin" style="background-color: white;width:100%">
<tr>	
<td valign="top">
<input type="text" class="form-control" name="classname[]" placeholder="Enter class name" style="width:170px" required>
</td>

<td valign="top">
<input type="text" class="form-control" name="classt[]" placeholder="Specify class teacher" list='datalist1' style="width:310px">

<datalist id='datalist1' style='border:0px solid red;font-size:16pt'>	
<option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option>	
</datalist>
</td>
<td width="50"><p><span><a id="alvinminus" href=""  >[-]</a> <a id="alvinplus" href="">[+]</a></span></p></td>
</tr>	

</table>

<div class="form-group"><br>
<button type="submit" name="create_classes" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE
</button>	
</div>
</div>
</form><br>


<form method="POST">
<table class="table">
<tr><th style='width:10px;text-align: left'>No</th>
    <th style="text-align: left">Class Name</th>
    <th style="text-align: left">Class Teacher</th></tr>

<input type='hidden' name='classid[]' class='form-control' value='17'><tr id='dope'><td>1</td><td><input type='text' name='classname[]' class='form-control' value='L3 ACC' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Marie Chantal DUSABUMUREMYI[19]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='18'><tr id='dope'><td>2</td><td><input type='text' name='classname[]' class='form-control' value='L3 BUS' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Marie Chantal DUSABUMUREMYI[19]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='1'><tr id='dope'><td>3</td><td><input type='text' name='classname[]' class='form-control' value='L3 CAP' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Alexis Yves DUSABIMANA[17]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='20'><tr id='dope'><td>4</td><td><input type='text' name='classname[]' class='form-control' value='L3 LSV' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Jean HATEGEKIMANA[23]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='3'><tr id='dope'><td>5</td><td><input type='text' name='classname[]' class='form-control' value='L3 MAS' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='19'><tr id='dope'><td>6</td><td><input type='text' name='classname[]' class='form-control' value='L3 OFM' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Marie Chantal DUSABUMUREMYI[19]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='15'><tr id='dope'><td>7</td><td><input type='text' name='classname[]' class='form-control' value='L3 RCO' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Alexis Yves DUSABIMANA[17]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='6'><tr id='dope'><td>8</td><td><input type='text' name='classname[]' class='form-control' value='L4 LSV' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='8'><tr id='dope'><td>9</td><td><input type='text' name='classname[]' class='form-control' value='L4 MAS A' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='9'><tr id='dope'><td>10</td><td><input type='text' name='classname[]' class='form-control' value='L4 MAS B' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='16'><tr id='dope'><td>11</td><td><input type='text' name='classname[]' class='form-control' value='L4 RCO' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Chantal MUSHIMIYIMANA[12]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='5'><tr id='dope'><td>12</td><td><input type='text' name='classname[]' class='form-control' value='L4 SFD' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='11'><tr id='dope'><td>13</td><td><input type='text' name='classname[]' class='form-control' value='L5 LSV' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='13'><tr id='dope'><td>14</td><td><input type='text' name='classname[]' class='form-control' value='L5 MAS A' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='14'><tr id='dope'><td>15</td><td><input type='text' name='classname[]' class='form-control' value='L5 MAS B' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='12'><tr id='dope'><td>16</td><td><input type='text' name='classname[]' class='form-control' value='L5 RCO' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr><input type='hidden' name='classid[]' class='form-control' value='10'><tr id='dope'><td>17</td><td><input type='text' name='classname[]' class='form-control' value='L5 SFD' style='padding-left:10px'></td><td><input type='text' name='classt[]' class='form-control' value='Brother Adrien MUSABIYINEMA[27]' style='padding-left:10px' list='datalist2'><datalist id='datalist2' style='border:0px solid red;font-size:16pt'><option>Alexis Yves DUSABIMANA [17]</option><option>Chantal MUSHIMIYIMANA [12]</option><option>Christian NIYOMUGABO [11]</option><option>Delphine NIWEMWUNGELI [8]</option><option>Emmanuel NIYONZIMA [9]</option><option>Jean Claude NTIRANTA [20]</option><option>Jean HATEGEKIMANA [23]</option><option>Jonas KARASIRA [22]</option><option>Marie Chantal DUSABUMUREMYI [19]</option><option>MUGABO Andre [38]</option><option>MUHUNNYI Francois [34]</option><option>NYAYIHA Kevin [33]</option><option>NYIRAHAKORIMANA Claudette [37]</option><option>UWIHOREYE Beatrice [36]</option></datalist></td></tr></table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="update_classes" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> <b>UPDATE</b></button>
</form>
</div>
</div>
</div>
</div>





<div class="modal fade" id="courses" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-book"></i> COURSES MANAGEMENT</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="table-responsive">
<table border="0" cellspacing="0" id="alvin1" style="background-color: white;width:100%">
<tr>	
<td valign="top">
<input type="text" class="form-control" name="courso[]" placeholder="Coursename" style="width:170px" required>
</td>

<td valign="top">
<input type="text" class="form-control" name="coursecode[]" placeholder="Coursecode" style="width:110px" required>
</td>

<td valign="top">
<input type="text" class="form-control" onkeypress="return isNumberKey(event)" name="numhrs[]" placeholder="Hours" style="width:65px" required>
</td>

<td valign="top">
<select class="form-control" name="level[]" style="width:90px">
<option value="">--Level</option>
<option>L3</option><option>L4</option><option>L5</option>
</select>
</td>

<td valign="top">
<select class="form-control" name="opt[]" style="width:90px">
<option value="">--Option--</option>
<option>CAP</option><option>RCO</option><option>LSV</option><option>MAS</option><option>SFD</option>
</select>
</td>


<td valign="top">
<select class="form-control" name="catego[]" style="width:140px">
<option value="">--Category--</option>
<option>PRINCIPAL SUBJECT</option>
<option>GENERAL SUBJECT</option>
</select>
</td> 

<td width="50"><p><span><a id="alvinminus1" href=""  >[-]</a> <a id="alvinplus1" href="">[+]</a></span></p></td>
</tr>	

</table>
</div>

<div class="form-group"><br>
<button type="submit" name="save_subjects" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>	
</div>
</form><br><br>


<b><u>VIEW COURSES DETAILS</u></b><br><br>

<div style="background-color: grey;padding:10px;color:white">
<form method="GET">
<div class="form-group">
<label for="inputdefault">Select Level</label>
<select class="form-control" name="levo" style="width:180px" required>
<option value="">-- Select --</option>
<option>L3</option><option>L4</option><option>L5</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Select Option</label>
<select class="form-control" name="opto" style="width:180px" required>
<option value="">-- Select --</option>
<option>CAP</option><option>RCO</option><option>LSV</option><option>MAS</option><option>SFD</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="search_subj" value="1" class="btn btn-info">
<span class="glyphicon glyphicon-arrow-right"></span> GO</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>






<!-- COMMUNICA-->
<div class="modal fade" id="toallparents" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY ALL PARENTS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords1" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg1' name='msg' onkeyup="return wordCounter(1)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtoallparents" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>





<div class="modal fade" id="tosomeparents" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> NOTIFY SOME PARENTS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">
<div class="table-responsive" id='cool'>

<div class="form-group">
<table border="0" cellspacing="0" id="somep" style="background-color: white;width:100%">
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone1' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone2' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone3' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone4' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone5' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone6' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone7' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone8' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone9' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone10' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone11' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone12' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone13' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone14' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone15' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone16' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone17' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone18' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone19' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='pridone20' data-provide="typeahead" placeholder="Specify student....">
</td>
<!--<td width="50" style="padding-top:25px"><p><span><a id="someminus" href=""  >[-]</a> <a id="someplus" href="">[+]</a></span></p></td>-->
</tr> 
</table>
</div>

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords10" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="8" class="form-control" id='msg10' name='msg' onkeyup="return wordCounter(10)" placeholder="Write your message here..." required></textarea>
</div>


<div class="form-group"><br>
<button type="submit" name="sendtosomeparents" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE
</button>   
</div>
</div>
</form>
</div>

</div>
</div>
</div>


<div class="modal fade" id="tosomeclasses" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY SOME CLASSES</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Select class(es)</label>
<select class="form-control" name="classes[]" style="height:110px" multiple>
<option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords2" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg2' name='msg' onkeyup="return wordCounter(2)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtosomeclasses" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>




<div class="modal fade" id="toallstaff" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY ALL STAFFS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords3" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg3' name='msg' onkeyup="return wordCounter(3)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtoallstaff" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>



<div class="modal fade" id="toadmin" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY ADMIN STAFFS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords4" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg4' name='msg' onkeyup="return wordCounter(4)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtoadmin" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>



<div class="modal fade" id="toteachers" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY TEACHERS ONLY</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords5" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg5' name='msg' onkeyup="return wordCounter(5)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtoteachers" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal fade" id="toother" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> NOTIFY OTHER PEOPLE</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Sender ID</label>
<input type="text" class="form-control" name='senderid' maxlength="11" placeholder="Specify sender ID" required>
</div>

<div class="form-group">
<label for="inputdefault">SMS Receivers:</label>
<textarea rows="5" class="form-control" name='receivers' placeholder="Specify receivers of SMS" required></textarea>
</div>

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords6" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg6' name='msg' onkeyup="return wordCounter(6)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendtoothers" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>










<div class="modal fade" id="bycards" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-envelope"></i> BY CARDS - SWAPING</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Students' Cards:</label>
<textarea rows="5" class="form-control" id='auto_reader' name='receivers' placeholder="Swipe each student card...." required></textarea>
</div>

<div class="form-group">
<label for="inputdefault">Message:</label> <span id="numofwords8" style='font-weight:bold;color:red'></span>
<textarea cols="8" rows="5" class="form-control" id='msg8' name='msg' onkeyup="return wordCounter(8)" placeholder="Write your message here..." required></textarea>
</div>

<div class="form-group">
<button type="submit" name="sendbycards" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> SEND SMS</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>

</div>
</div>
</div>




<div class="modal fade" id="new_std" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-pencil"></i> ADD NEW STUDENT</h4></div>

<div class="modal-body" style='text-align:left'>
<div class="row">
<form method="POST" id='update_std'>

<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Student Names</label>
<input type="text" class="form-control" name='names' autocomplete="off" placeholder="Enter student names" required>
</div>

<div class="form-group">
<label for="inputdefault">Student Class</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>


<div class="form-group">
<label for="inputdefault">Gender</label>
<select class="form-control" name="gender" required>
<option value="">--- Select ---</option>
<option>M</option><option>F</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Birth Year</label>
<input type="text" class="form-control" name='byear' autocomplete="off" placeholder="Enter student birth year">
</div>

<div class="form-group">
<label for="inputdefault">Father Names</label>
<input type="text" class="form-control" name='fanames' autocomplete="off" placeholder="Enter student father names" required>
</div>

<div class="form-group">
<label for="inputdefault">Father Contact</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='facontact' autocomplete="off" 
placeholder="Enter student father contact">
</div>

<div class="form-group">
<label for="inputdefault">Mother Names</label>
<input type="text" class="form-control" name='monames' autocomplete="off" placeholder="Enter student mother names" required>
</div>

<div class="form-group">
<label for="inputdefault">Mother Contact</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)"  name='mocontact' autocomplete="off" 
placeholder="Enter student mother contact">
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label for="inputdefault">Province</label>
<select class="form-control" name="province" id="province" onChange="districtDefine(this)" required>
<option value="">--- Select ---</option>
<option>KIGALI</option><option>SOUTHERN</option><option>NORTHERN</option><option>EASTERN</option><option>WESTERN</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">District</label>
<select class="form-control" name="district" id="parent_district" required>
<option value="-">Select District</option>
</select></div>

<div class="form-group">
<label for="inputdefault">Sector</label>
<input type="text" class="form-control" name='sector' onkeypress="return isAlphaKey(event)" autocomplete="off" placeholder="Enter sector" required>
</div>

<div class="form-group">
<label for="inputdefault">Cell</label>
<input type="text" class="form-control" name='cell' autocomplete="off" placeholder="Enter cell" required>
</div>

<div class="form-group">
<label for="inputdefault">Village</label>
<input type="text" class="form-control" name='village' autocomplete="off" placeholder="Enter village">
</div>

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
<label for="inputdefault">Religion</label>
<input type="text" class="form-control" name='reli' autocomplete="off" placeholder="Specify student religion">
</div>

<div class="form-group">
<label for="inputdefault">Sport</label>
<select class="form-control" name="sport">
<option value="">--- Select ---</option>
<option>FOOTBALL</option><option>VOLLEYBALL</option><option>BASKETBALL</option><option>KARATE</option><option>KUNG-FU</option>
<option>TENNIS</option><option>HANDBALL</option><option>ATHLETICS</option><option>OTHER</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Sponsor</label>
<input type="text" class="form-control" name='sponsor' autocomplete="off" placeholder="Specify student sponsor">
</div>

<div class="form-group">
<label for="inputdefault">School of Origin</label>
<input type="text" class="form-control" name='origin' autocomplete="off" placeholder="Specify school of origin" required>
</div>

<div class="form-group">
<label for="inputdefault">Presented Documents</label>
<input type="text" class="form-control" name='docs' autocomplete="off" placeholder="Specify presented documents" required>
</div>

<div class="form-group">
<button type="submit" name="register_std" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</div>
</form>
</div>
</div>

</div>
</div>
</div>



<div class="modal fade" id="load_pics" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-book"></i> VIEW PHOTOS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<button type="submit" name="load_pics" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>



<div class="modal fade" id="select_update" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-pencil"></i> UPDATE CLASS INFO</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">

<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<button type="submit" name="select_update" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View List</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>















<div class="modal fade" id="class_list" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> PRINT CLASS LIST</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?classlist" target="_blank">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>


<div class="form-group">
<label for="inputdefault">Select format:</label>
<select class="form-control" name="format" required>
<option value="">---- Select ----</option>
<option>PDF</option><option>Excel</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>



<div class="modal fade" id="teachers" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> ASSIGN COURSES TO TEACHERS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" onchange='dispCourses(this.value)' required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div id='contotea'>


</div>

<div class="form-group">
<button type="submit" name="confirm_teachers" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>




<div class="modal fade" id="stati_rp" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> PRINT RP Reports</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?rp" target="_blank">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Select format:</label>
<select class="form-control" name="format" required>
<option value="">---- Select ----</option>
<option>PDF</option><option>Excel</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>





<div class="modal fade" id="sdms" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> PRINT SDMS Reports</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="sdms.php" target="_blank">
<div class="form-group">
<label for="inputdefault">Select acad. year:</label>
<select class="form-control" name="acadyear" required>
<option>2020</option><option>2019</option><option>2018</option><option>2017</option><option>2016</option></select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>




<div class="modal fade" id="att_repo" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> STUDENTS' ATTENDANCE REPORTS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_attendance.php?2" target="_blank">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>


<div class="form-group">
<label for="inputdefault">From</label>
<input type="text" class="form-control" name='from' autocomplete="off" value="2020-01-16">
</div>

<div class="form-group">
<label for="inputdefault">To</label>
<input type="text" class="form-control" name='to' autocomplete="off" value="2020-01-23">
</div>


<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>


<div class="alert alert-info"><b>INDIVIDUAL: DATES-RANGE</b></div>

<form method="POST" action="pdf_attendance.php?3" target="_blank">
<div class="form-group">
<label for="inputdefault">Specify a Student:</label>
<input type="text" class="form-control" name='std' id='nicole' autocomplete="off" placeholder="Enter student names, class or reg.no.." required>
</div>


<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">Select term</option><option>1</option><option>2</option><option>3</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">Report Type:</label>
<select class="form-control" name="repo" required>
<option value="">--- Select report ---</option>
<option>ALL</option><option>PRESENCE</option><option>ABSENCE</option><option>LATE COMES</option>
</select>
</div>


<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>



</div>

</div>
</div>
</div>



<div class="modal fade" id="stati_full" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> STUDENTS FULL-INFO</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?identi" target="_blank">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option><option value="All">All Classes</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Select format:</label>
<select class="form-control" name="format" required>
<option value="">---- Select ----</option>
<option>PDF</option><option>Excel</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>




<div class="modal fade" id="stati_orpha" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> BY ORPHAN STATUS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?orphan" target="_blank">

<div class="form-group">
<label for="inputdefault">Orphan Status:</label>
<select class="form-control" name="status" required>
<option value="">---- Select ----</option>
<option>None</option><option>Mother</option><option>Father</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Select format:</label>
<select class="form-control" name="format" required>
<option value="">---- Select ----</option>
<option>PDF</option><option>Excel</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>






<div class="modal fade" id="new_stf" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-pencil"></i> ADD NEW STAFF</h4></div>

<div class="modal-body" style='text-align:left'>
<div class="row">
<form method="POST" id='update_std'>

<div class="col-md-6">
<div class="form-group">
<label for="inputdefault">Staff Names</label>
<input type="text" class="form-control" name='names' autocomplete="off" placeholder="Enter student names" required>
</div>

<div class="form-group">
<label for="inputdefault">Gender</label>
<select class="form-control" name="gender" required>
<option value="">--- Select ---</option>
<option>M</option><option>F</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Contact</label>
<input type="text" class="form-control" maxlength="10" onkeypress="return isNumberKey(event)" name='contact' autocomplete="off" 
placeholder="Enter staff contact">
</div>

<div class="form-group">
<label for="inputdefault">Email</label>
<input type="text" class="form-control" name='email' autocomplete="off" 
placeholder="Enter staff email">
</div>

<div class="form-group">
<label for="inputdefault">Birth Year</label>
<input type="number" class="form-control" maxlength="4" name='byear' autocomplete="off" placeholder="Enter staff birth year">
</div>

<div class="form-group">
<label for="inputdefault">Position</label>
<select class="form-control" name="position" required>
<option value="">--- Select position---</option>
<option>DAF</option><option>Secretary</option><option>Accountant</option><option>D. Director of Studies</option>
<option>Dean of Discipline</option><option>Patron</option><option>Teacher</option><option>Librarian</option><option>Other</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Province</label>
<select class="form-control" name="province" id="province2" onChange="districtLoad(this)" required>
<option value="">--- Select province of residence---</option>
<option>KIGALI</option><option>SOUTHERN</option><option>NORTHERN</option><option>EASTERN</option><option>WESTERN</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">District</label>
<select class="form-control" name="district" id="staff_district" required>
<option value="-">Select district of residence</option>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label for="inputdefault">Sector</label>
<input type="text" class="form-control" name='sector' onkeypress="return isAlphaKey(event)" autocomplete="off" placeholder="Enter sector" required>
</div>

<div class="form-group">
<label for="inputdefault">Degree</label>
<select class="form-control" name="degree" required>
<option value="">--- Select ---</option>
<option>A1</option><option>A0</option><option>Masters</option><option>pHD</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">Field / Domain</label>
<input type="text" class="form-control" name='domain' autocomplete="off" placeholder="Specify domain / field of study">
</div>

<div class="form-group">
<label for="inputdefault">Institution / University</label>
<input type="text" class="form-control" name='university' autocomplete="off" placeholder="Specify university">
</div>


<div class="form-group">
<label for="inputdefault">Recruitment Date</label>
<input type="text" class="form-control" maxlength="10" name='dorecruit' autocomplete="off" placeholder="Enter date of recruitment">
</div>

<div class="form-group">
<label for="inputdefault">Fingerprint No</label>
<input type="number" class="form-control" name='fpno' autocomplete="off" placeholder="Enter staff fingerprint no">
</div>

<div class="form-group">
<button type="submit" name="register_stf" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</div>

</form>
</div>
</div>

</div>
</div>
</div>





<div class="modal fade" id="view_stf" role="dialog">
<div class="modal-dialog modal-lg" style="width:80%">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-list"></i> LIST OF STAFF, 
<a href='pdf_report.php?staff' target="_blank" style="font-size: 11pt;text-decoration: underline;color:grey">Export in PDF</a></h4></div>

<div class="modal-body" style='text-align:left'>
<input type="text" placeholder="Search a staff.........." class="form-control" onkeyup="autoStaff(this.value)"><br>

<div id='eminesta'>
<form method="POST">
<div class="table-responsive" style="font-size: 9pt">
<table class="table" border="0" style="font-size: 10pt">
<tr style="background-color: khaki">
<th style="width:20px">No</th>
<th style="text-align: left;width: auto">Staff Names</th>
<th style="text-align: center;width:30px">Gender</th>
<th style="text-align: center;width:30px">FP</th>
<th style="text-align: left">Contact</th>
<th style="text-align: left">Email</th>
<th style="text-align: left">Position</th>
<th style="text-align: left">Date of Recruit.</th>
<th style="text-align: left;width: 50px">Degree</th>
<th style="text-align: left;width: 30px">PWD</th>
</tr>

<tr id='comma'><td style='text-align:center'>1</td><td>Alexis Yves DUSABIMANA</td><td style='text-align:center'>M</td><td style='text-align:center'>18</td><td>+250788818532</td><td>yvesalexisdu@gmail.com</td><td>Teacher</td><td>23/01/2017</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=17' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=17' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>2</td><td>Brother Adrien MUSABIYINEMA</td><td style='text-align:center'>M</td><td style='text-align:center'>40</td><td>+250788757140</td><td>musaadrien75@gmail.com</td><td>D. Director of Studies</td><td>19/05/2015</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=27' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=27' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>3</td><td>Brother Pie SEBAKIGA</td><td style='text-align:center'>M</td><td style='text-align:center'></td><td>+250781542725</td><td>-</td><td>Principal</td><td></td><td>-</td><td>
<a href='cpanel.php?edit_stf&ref=1' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=1' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>4</td><td>Chantal MUSHIMIYIMANA</td><td style='text-align:center'>F</td><td style='text-align:center'>17</td><td>+250788686077</td><td>muchajoki@gmail.com</td><td>Teacher</td><td>02/02/2016</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=12' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=12' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>5</td><td>Christian NIYOMUGABO</td><td style='text-align:center'>M</td><td style='text-align:center'>11</td><td>+250785736198</td><td>niyochris007@gmail.com</td><td>Teacher</td><td>18/02/2016</td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=11' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=11' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>6</td><td>Delphine NIWEMWUNGELI</td><td style='text-align:center'>F</td><td style='text-align:center'>20</td><td>+250728415713</td><td>niyodelly@yahoo.fr</td><td>Teacher</td><td>02/02/2015</td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=8' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=8' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>7</td><td>Emmanuel NIYONZIMA</td><td style='text-align:center'>M</td><td style='text-align:center'>15</td><td>+250785229446</td><td>niemmy67@yahoo.com</td><td>Teacher</td><td>02/02/2015</td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=9' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=9' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>8</td><td>Emmanuel RUZIGA</td><td style='text-align:center'>M</td><td style='text-align:center'>21</td><td>+250788652595</td><td>ruziga.emmanuel@gmail.com</td><td>DAF</td><td>01/06/2015</td><td>Msc</td><td>
<a href='cpanel.php?edit_stf&ref=26' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=26' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>9</td><td>Eric DUSHIMIMANA</td><td style='text-align:center'>M</td><td style='text-align:center'></td><td>+250785306485</td><td></td><td>Dean of Discipline</td><td>01/02/2015</td><td>A2</td><td>
<a href='cpanel.php?edit_stf&ref=30' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=30' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>10</td><td>HABIMANA Ferdinand</td><td style='text-align:center'>M</td><td style='text-align:center'></td><td>+250783243325</td><td>-</td><td>Patron</td><td>-</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=39' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=39' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>11</td><td>Jean Claude NTIRANTA</td><td style='text-align:center'>M</td><td style='text-align:center'>7</td><td>+250781143063</td><td>nclause022@gmail.com</td><td>Teacher</td><td>22/01/2018</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=20' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=20' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>12</td><td>Jean HATEGEKIMANA</td><td style='text-align:center'>M</td><td style='text-align:center'>8</td><td>+250780793330</td><td>hajean26@gmail.com</td><td>Teacher</td><td>Married</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=23' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=23' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>13</td><td>Jonas KARASIRA</td><td style='text-align:center'>M</td><td style='text-align:center'>9</td><td>+250784586385</td><td>karasirajonas@gmail.com</td><td>Teacher</td><td>Single</td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=22' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=22' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>14</td><td>Marie Chantal DUSABUMUREMYI</td><td style='text-align:center'>F</td><td style='text-align:center'>12</td><td>+250787673788</td><td>dusabecynthia@gmail.com</td><td>Teacher</td><td>01/03/2017</td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=19' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=19' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>15</td><td>MUGABO Andre</td><td style='text-align:center'>F</td><td style='text-align:center'></td><td>+250783165626</td><td>andremugabo@yahoo.fr</td><td>Teacher</td><td>21/05/2019</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=38' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=38' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>16</td><td>MUHUNNYI Francois</td><td style='text-align:center'>M</td><td style='text-align:center'></td><td>+250785973423</td><td></td><td>Teacher</td><td></td><td>A1</td><td>
<a href='cpanel.php?edit_stf&ref=34' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=34' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>17</td><td>NIYONSENGA Bernardin</td><td style='text-align:center'>M</td><td style='text-align:center'>45</td><td>+250789426424</td><td></td><td>Patron</td><td></td><td></td><td>
<a href='cpanel.php?edit_stf&ref=32' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=32' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>18</td><td>NYAYIHA Kevin</td><td style='text-align:center'>M</td><td style='text-align:center'></td><td>+250786746170</td><td>nyayihakevin@gmail.com</td><td>Teacher</td><td>13/02/2019</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=33' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=33' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>19</td><td>NYIRAHAKORIMANA Claudette</td><td style='text-align:center'>F</td><td style='text-align:center'></td><td>+250781065772</td><td></td><td>Teacher</td><td>2019</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=37' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=37' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>20</td><td>Odeth MUREKATETE</td><td style='text-align:center'>F</td><td style='text-align:center'>6</td><td>+250784257997</td><td>murekateteo@yahoo.com</td><td>Secretary</td><td>18/12/2012</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=25' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=25' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>21</td><td>Sandra UMUTONI</td><td style='text-align:center'>F</td><td style='text-align:center'>5</td><td>+250788547204</td><td>umutonisandra@yahoo.fr</td><td>Accountant</td><td>13/04/2015</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=28' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=28' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr><tr id='comma'><td style='text-align:center'>22</td><td>UWIHOREYE Beatrice</td><td style='text-align:center'>F</td><td style='text-align:center'></td><td>+250783490610</td><td></td><td>Teacher</td><td>6/5/2019</td><td>A0</td><td>
<a href='cpanel.php?edit_stf&ref=36' style='text-decoration:underline'>Edit</a> | 
<a href='pdf_profile.php?stf&ref=36' target='_blank' style='text-decoration:underline;color:green'>Full Profile</a> |
</td></tr></table>
</div>
</div>
</form>
</div>

</div>
</div>
</div>



<div class="modal fade" id="view_stf_photos" role="dialog">
<div class="modal-dialog modal-lg" style="width:70%">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-list"></i> STAFF PHOTOS</h4></div>
<div class="modal-body" style='text-align:left;background-color: #F4F4F4'>

<div class='row'><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Alexis Yves DUSABIMANA<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/c4f99a730f726dc55fafdc37288e4222.jpg' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Brother Adrien MUSABIYINEMA<br><b>D. Director of Studies</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/b3ade5c02ccd95d8f104a6b77ed2e37a.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Brother Pie SEBAKIGA<br><b>Principal</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Chantal MUSHIMIYIMANA<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/450765ea4cd524814069be0a91762dde.JPG' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Christian NIYOMUGABO<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Delphine NIWEMWUNGELI<br><b>Teacher</b></div></div><div class='row'><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Emmanuel NIYONZIMA<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Emmanuel RUZIGA<br><b>DAF</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Eric DUSHIMIMANA<br><b>Dean of Discipline</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
HABIMANA Ferdinand<br><b>Patron</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Jean Claude NTIRANTA<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Jean HATEGEKIMANA<br><b>Teacher</b></div></div><div class='row'><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Jonas KARASIRA<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Marie Chantal DUSABUMUREMYI<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
MUGABO Andre<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
MUHUNNYI Francois<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
NIYONSENGA Bernardin<br><b>Patron</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
NYAYIHA Kevin<br><b>Teacher</b></div></div><div class='row'><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
NYIRAHAKORIMANA Claudette<br><b>Teacher</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Odeth MUREKATETE<br><b>Secretary</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
Sandra UMUTONI<br><b>Accountant</b></div><div class='col-md-2' align='center' style='padding-left:30px;padding-right:30px'>
<img src='view/stf_pics/nopic.png' class='img-responsive img-circle' style='height:170px;width:100%;border:0px solid black'><br>
UWIHOREYE Beatrice<br><b>Teacher</b></div><br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sjitc\view\cpanel.php</b> on line <b>2774</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sjitc\view\cpanel.php</b> on line <b>2774</b><br />
</div><div class="form-group" style="text-align: center">
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</div>

</div>
</div>
</div>






<div class="modal fade" id="justabs" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> JUSTIFY STUDENT ABSENCE</h4></div>

<div class="modal-body" style='text-align:left'>
<div class="row">
<div class="col-md-6">
<form method="POST">
<div class="table-responsive">

<div class="form-group">
<table border="0" cellspacing="0" style="background-color: white;width:100%">
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema1' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema2' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema3' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema4' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema5' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema6' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema7' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema8' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema9' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
<tr>  
<td valign="top" style='padding-top:20px'>
Specify student:
<input type="text" class="form-control" name="stdo[]" id='tetema10' data-provide="typeahead" placeholder="Specify student....">
</td>
</tr> 
</table>
</div>

<div class="form-group"><br>
<button type="submit" name="confirm_absence" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> CONFIRM</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE
</button>   
</div>
</div>
</form>
</div>



<div class="col-md-6">
<table class="table">
<tr style="background-color: khaki">
<th style="width:20px;text-align: left">No</th><th style="text-align: left">Student Names</th><th style="text-align: left">Class</th></tr>

</table>
</div>
</div>
</div>

</div>
</div>
</div>



<div class="modal fade" id="givepermi" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> GIVE PERMISSION</h4></div>

<div class="modal-body" style='text-align:left'>
<input type="text" id="input_permi" class="form-control" placeholder="Swipe student card....." autocomplete="off"
onchange='fetchStdData(this.value,1,"input_permi","content_permi")'>

<div id="content_permi">

</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="givenpermi" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-list"></i> GIVEN PERMISSIONS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?view_permissions1" target="_blank">
<div class="form-group">
<label for="inputdefault">Select Class</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option><option value="All">All Classes</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Select Term</label>
<select class="form-control" name="term" required>
<option>1</option><option>2</option><option>3</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Acad. Year</label>
<select class="form-control" name="acadyear" required>
<option>2020</option><option>2019</option></select>
</div>

<div class="form-group">
<button type="submit" name="view" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> VIEW REPORT</button>
</div>
</form><br>

<div style="background-color: grey;color:white;padding: 8px;border-radius: 5px">
<form method="POST" action="pdf_report.php?view_permissions2" target="_blank">
<div class="form-group">
<label for="inputdefault">From</label>
<input type="text" class="form-control" onkeypress="return isNumberKey(event)" name='from' value="2020-01-23" required>
</div>

<div class="form-group">
<label for="inputdefault">To</label>
<input type="text" class="form-control" onkeypress="return isNumberKey(event)" name='to' value="2020-01-23" required>
</div>

<div class="form-group">
<button type="submit" name="view" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> VIEW REPORT</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> CLOSE</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="reducedisp" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> REDUCE DISCIPLINE MARKS</h4></div>

<div class="modal-body" style='text-align:left'>
<input type="text" id="input_disp" class="form-control" placeholder="Swipe student card....." autocomplete="off" 
onchange='fetchStdData(this.value,2,"input_disp","content_disp")'>

<span id='resulto' style="font-weight: bold;color:blue"></span>

<div id="content_disp">

</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="viewdisp" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> DISCIPLINE MARKS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?dispmarks" target="_blank">
<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">--- Select Term ---</option>
<option>1</option><option>2</option><option>3</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Acadyear:</label>
<select class="form-control" name="acadyear" required>
<option value="">--- Select year ---</option>
<option>2020</option><option>2019</option></select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal fade" id="dispdeci" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> CONFIRM DISCIPLINE DECISION</h4></div>

<div class="modal-body" style='text-align:left'>
<input type="text" id="input_deci" class="form-control" placeholder="Swipe student card....." autocomplete="off" 
onchange='fetchStdData(this.value,3,"input_deci","content_deci")'>

<span id='resulto' style="font-weight: bold;color:blue"></span>

<div id="content_deci">

</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="trackdisp" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> TRACK DISCIPLINE STATUS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_report.php?dispstatus" target="_blank">
<div class="form-group">
<label for="inputdefault">Specify student:</label>

<input type="text" class="form-control" name="std" placeholder="Enter student names...." list='promo' autocomplete='off' required>
<datalist id='promo' style='border:0px solid red;font-size:16pt' autocomplete='off'>   
<option>HARERIMANA Patrick [L5 SFD: 2018-4]</option><option>ANELKA Aristide [L4 SFD: 2018-40]</option><option>GACANDAGA Benny Raul [L5 SFD: 2018-42]</option><option>GIKUNDIRO Chaste [L5 SFD: 2018-43]</option><option>GISA Ornella [L4 SFD: 2018-44]</option><option>HABIMANA GISA Desire [L4 SFD: 2018-45]</option><option>HAKIZIMANA Zidan [L4 SFD: 2018-46]</option><option>HIRWA Munana Arnold [L5 SFD: 2018-47]</option><option>IRAKOZE Gylain [L5 SFD: 2018-50]</option><option>IRAKOZE NZIZA Shaffi [L4 SFD: 2018-51]</option><option>ISHEJA Ladouce [L5 SFD: 2018-52]</option><option>ISHIMWE Kevin [L5 SFD: 2018-53]</option><option>KAJUGA Daniel [L5 SFD: 2018-54]</option><option>KAZAYIRE Samantha [L5 SFD: 2018-55]</option><option>KWIZERA Museveni [L4 SFD: 2018-56]</option><option>MUHIRE Blaise [L5 SFD: 2018-58]</option><option>MUSHUMBA Jean Baptiste [L5 SFD: 2018-59]</option><option>NDUWAYEZU Christian [L5 SFD: 2018-60]</option><option>NGABO Robert [L5 SFD: 2018-61]</option><option>NIYONKURU Frank Irene [L4 SFD: 2018-62]</option><option>NSANZIMANA Pantaleon Elvis [L4 SFD: 2018-63]</option><option>DUSENGIMANA Nathan [L5 SFD: 2018-64]</option><option>NSHIZIRUNGU Aloys [L4 SFD: 2018-65]</option><option>NSHUTI Guillaume [L5 SFD: 2018-66]</option><option>NTARE Rusanganwa Brain [L4 SFD: 2018-67]</option><option>NZANYWENIMANA Sadallah [L4 SFD: 2018-68]</option><option>RWANYINDO Kabera Robert [L4 SFD: 2018-69]</option><option>SHIMA NSHUTI Aime Arsene [L5 SFD: 2018-70]</option><option>UMUMVANDIMWE Patrick [L4 SFD: 2018-71]</option><option>UMUTONI WASE Olive [L5 SFD: 2018-72]</option><option>URUYANGE Alida [L5 SFD: 2018-73]</option><option>UTUJE Cedric [L5 SFD: 2018-74]</option><option>ISHEMA Toussaint [L5 SFD: 2018-83]</option><option>ABIZEYE Elie Christian [L4 SFD: 2018-101]</option><option>MUGISHA Sharifu [L4 SFD: 2018-150]</option><option>HIMBAZA Igor [L5 SFD: 2018-201]</option><option>MUKAMUGISHA Phoibe [L5 SFD: 2018-211]</option><option>NIYINDORERA Marc [L5 LSV: 2018-29]</option><option>KIRENGA Sam Shabani [L5 LSV: 2018-14]</option><option>AYINKAMIYE Fillette Nicole [L5 LSV: 2018-102]</option><option>BYAMUNGU Alain [L5 LSV: 2018-103]</option><option>GAKIRE John [L5 LSV: 2018-104]</option><option>KWIZERA Patrick [L5 LSV: 2018-106]</option><option>NTAKIRUTIMANA David [L5 LSV: 2018-109]</option><option>TWAHIRWA Blaise [L5 LSV: 2018-111]</option><option>AHISHAKIYE Eric [L5 LSV: 2018-112]</option><option>BENIHIRWE NDUNGUTSE Melissa Jolie [L5 LSV: 2018-113]</option><option>CYUZUZO Shemsa [L4 LSV: 2018-114]</option><option>ISHIMWE Anne Marie [L5 LSV: 2018-115]</option><option>MUSANABERA Esther [L5 LSV: 2018-117]</option><option>NDUNGUTSE Derrick [L5 LSV: 2018-118]</option><option>NZABAHIMANA Evariste [L5 LSV: 2018-120]</option><option>SHEMA Levis [L5 LSV: 2018-123]</option><option>UFITEYEZU SHEMA Logan [L5 LSV: 2018-124]</option><option>MUNEZERO Patrick [L5 LSV: 2018-149]</option><option>KALIMA Chance Theonest [L5 LSV: 2018-210]</option><option>ITANGISHAKA RUGIRA Valens [L5 MAS A: 2017-69]</option><option>TUYIZERE Patrick [L5 MAS A: 2018-36]</option><option>SHEMA Muminu [L5 MAS A: 2018-35]</option><option>RUGWIRO Fabrice [L5 MAS A: 2018-34]</option><option>NYIRANSABIMANA Mariam [L5 MAS A: 2018-32]</option><option>NGABONZIZA Ezechiel [L5 MAS B: 2018-28]</option><option>NDUWIMANA Amza [L5 MAS A: 2018-27]</option><option>NDIZEYE ISHIMWE Aime Ghislain [L5 MAS B: 2018-26]</option><option>MWIZERWA Joseph [L5 MAS A: 2018-25]</option><option>MWENEDATA David [L5 MAS A: 2018-24]</option><option>MUZIMA Moussa [L5 MAS A: 2018-23]</option><option>MUTANGUHA Didier [L5 MAS A: 2018-22]</option><option>MUSONERA Yves [L5 MAS A: 2018-20]</option><option>MUNYAWERA Kevin [L4 MAS A: 2018-19]</option><option>MUHORAKEYE Solange [L5 MAS A: 2018-18]</option><option>MUGISHA Seth [L4 MAS A: 2018-17]</option><option>MUGISHA David Prince [L5 MAS A: 2018-16]</option><option>MANZI Sayf Rahman [L5 MAS A: 2018-15]</option><option>KEKAMBA Junior [L5 MAS B: 2018-13]</option><option>KAYONGA Bertrand [L4 MAS A: 2018-12]</option><option>KAREKEZI Kadafi [L5 MAS A: 2018-11]</option><option>IYAMUREMYE Erwin [L5 MAS A: 2018-10]</option><option>ISHIMWE GAHUNDE Benjamin [L5 MAS A: 2018-9]</option><option>HIRWA Bonheur [L5 MAS A: 2018-7]</option><option>HAVUGIMANA HIRWA Bruce [L5 MAS A: 2018-6]</option><option>HARERIMANA Yassin [L5 MAS A: 2018-5]</option><option>CYUBAHIRO Assouman [L4 MAS A: 2018-3]</option><option>BUSEYI Christian [L5 MAS A: 2018-1]</option><option>TWAGIRIMANA Brawn Dauson [L5 MAS A: 2018-37]</option><option>UMUTWARE Nicolas [L5 MAS A: 2018-38]</option><option>UWIDUHAYE Yassir [L5 MAS A: 2018-39]</option><option>TUYISHIMIRE Billy [L5 MAS A: 2018-208]</option><option>MATARI Kinani [L5 MAS A: 2018-209]</option><option>MUGABO Omar [L4 MAS B: 2018-220]</option><option>SAFARI Yousuf [L4 MAS B: 2017-134]</option><option>NZAYISENGA Boutross [L5 MAS B: 2018-33]</option><option>BYUKUSENGE Amani [L5 MAS B: 2018-2]</option><option>BIKORIMANA Felix [L5 MAS B: 2018-76]</option><option>GATSINZI Fadhil Edgar [L5 MAS B: 2018-77]</option><option>HAKIZIMANA Dieudonnee [L4 MAS B: 2018-79]</option><option>IRADUKUNDA Christian [L4 MAS B: 2018-81]</option><option>IRADUKUNDA Emmanuel [L5 MAS B: 2018-82]</option><option>ISHIMWE Yves [L5 MAS B: 2018-84]</option><option>KANYANA MANZI Clarisse [L5 MAS B: 2018-85]</option><option>MASENGESHO Emima [L5 MAS B: 2018-86]</option><option>MUGISHA Gratien [L5 MAS B: 2018-87]</option><option>MUHIRE Eric Abdullah [L5 MAS B: 2018-88]</option><option>MUNDEKE Suede [L5 MAS B: 2018-89]</option><option>MUSABYIMANA Yassin [L5 MAS B: 2018-90]</option><option>NGABONZIZA Fabrice [L5 MAS B: 2018-91]</option><option>NTIRENGANYA Jean Paul [L5 MAS B: 2018-92]</option><option>NTWARI Uwimana Arcade [L5 MAS B: 2018-93]</option><option>RUGAMBWA Boneste Aristone [L5 MAS B: 2018-94]</option><option>SHIMWA Patience [L5 MAS B: 2018-95]</option><option>UWASE Naila [L5 MAS B: 2018-97]</option><option>UWIDUHAYE Emelyne [L4 MAS B: 2018-98]</option><option>UWIMANA Taufiqi [L4 MAS B: 2018-99]</option><option>YUEN Joel [L5 MAS B: 2018-100]</option><option>NTWARI Fred [L5 MAS B: 2018-110]</option><option>NGABONZIZA Elvis [L5 MAS B: 2018-153]</option><option>NSHIMIYIMANA Hakim [L5 MAS B: 2018-207]</option><option>IZIBYOSE Edison [L5 MAS B: 2018-205]</option><option>MUGISHA Claude Dylan [L4 MAS B: 2018-200]</option><option>MUNYENGANGO Innocent [L4 MAS B: 2018-202]</option><option>MUGISHA Honore [L5 MAS B: 2018-215]</option><option>RWASAMANZI Thierry [L5 MAS B: 2018-221]</option><option>INGABIRE Justine [L5 LSV: 2017-10]</option><option>GASARABWE Lorris George [L5 LSV: 2017-11]</option><option>ISHIMWE NGABO Esperee [L5 LSV: 2017-12]</option><option>UWIZEYE Ell Shadai [L5 LSV: 2017-19]</option><option>MANZI Halidi [L5 LSV: 2017-73]</option><option>UHIRIWE Clementine [L5 LSV: 2017-89]</option><option>NYIRABIKARI Assoumpta [L4 LSV: 2017-127]</option><option>IRAKOZE Samilla [L5 LSV: 2017-147]</option><option>KAGENZA Sadick [L5 LSV: 2018-116]</option><option>MICO Usama [L5 MAS A: 2017-14]</option><option>TAMBINEZA NDIBWAMI Gedeon [L5 MAS A: 2017-15]</option><option>NIYIGENA Theophile [L5 MAS A: 2017-18]</option><option>NIYODUSENGA Obed [L5 MAS A: 2017-31]</option><option>IKIREZI Sandra [L5 MAS A: 2017-37]</option><option>KABEZA Ibrahim [L5 MAS A: 2017-44]</option><option>DUSENGE Maranatha [L5 MAS A: 2017-50]</option><option>MUNEZERO Nusurudin [L5 MAS A: 2017-52]</option><option>RUTAGARAMA Bryan [L5 MAS A: 2017-53]</option><option>SHEMA Jean Luc Idrissa [L5 MAS A: 2017-56]</option><option>MUHAYIMANA Barnabe [L5 MAS A: 2017-57]</option><option>KAYITARE Floris [L5 MAS A: 2017-60]</option><option>TWAGIRIMANA Egide [L5 MAS A: 2017-64]</option><option>NYAMUHENDA Emile [L5 MAS A: 2017-65]</option><option>KUNESHA RWAJEKARE Israel [L4 MAS A: 2017-71]</option><option>NGENDAKUMANA Prince [L5 MAS A: 2017-80]</option><option>BAHATI PAUL [L5 MAS A: 2017-90]</option><option>NSHIZIRUNGU Mohamed [L5 MAS A: 2017-112]</option><option>KWIZERA Frank [L4 MAS A: 2017-115]</option><option>MUGISHA Guillain [L5 MAS A: 2017-120]</option><option>MUVANDIMWE Shedrack [L5 MAS A: 2017-126]</option><option>NYANDWI Fabrice [L5 MAS A: 2017-128]</option><option>UKWIZAGIRA Tite [L5 MAS A: 2017-144]</option><option>IRADUKUNDA Lambert [L5 MAS A: 2017-153]</option><option>INGABIRE Peace [L5 MAS A: 2018-8]</option><option>DUSHIMIRIMANA Olivier [L5 MAS A: 2018-127]</option><option>GAHUNGA Aristote [L5 MAS A: 2018-128]</option><option>HIRWA Aime Salvi [L5 MAS A: 2018-129]</option><option>IMENA Yves [L5 MAS A: 2018-130]</option><option>NSHIMIYIMANA Rene [L5 MAS A: 2018-132]</option><option>NTIRAMPEBA Arthur [L5 MAS A: 2018-133]</option><option>RUTAGENGWA UNEZE Salim [L5 MAS A: 2018-135]</option><option>SIBOMANA Etienne [L5 MAS A: 2018-136]</option><option>TUYISHIME Albert Sabin [L5 MAS A: 2018-137]</option><option>UWIZEYIMANA Ismael [L5 MAS A: 2018-138]</option><option>MUJIJI Shaban [L5 MAS B: 2017-13]</option><option>SHEMA Derrick [L5 MAS B: 2017-16]</option><option>MUGISHA Origene [L5 MAS B: 2017-17]</option><option>MUTEZINTARE David [L5 MAS B: 2017-45]</option><option>SHEMA Tommy [L5 MAS B: 2017-46]</option><option>BYIRINGIRO RUKUNDO Aime [L5 MAS B: 2017-48]</option><option>NIYONKURU Amina [L5 MAS B: 2017-49]</option><option>MURENGEZI SHEMA Shawn [L5 MAS B: 2017-54]</option><option>HABIMANA Charif [L5 MAS B: 2017-55]</option><option>CENSHA Moise [L5 MAS B: 2017-59]</option><option>TUYISHIME Jean  D Amour [L5 MAS B: 2017-61]</option><option>ITANGISHAKA Benjamin [L5 MAS B: 2017-63]</option><option>KARENZI CYUSA Maxime [L5 MAS B: 2017-68]</option><option>NDICUNGUYE Hassan [L5 MAS B: 2017-70]</option><option>IRANKUNDA Jehovanis [L5 MAS B: 2017-81]</option><option>KABAGABO Gilbert [L5 MAS B: 2017-88]</option><option>NSHUTI Claude [L5 MAS B: 2017-91]</option><option>NIYOMURINZI Israel [L5 MAS B: 2017-93]</option><option>BAHATI Christian [L5 MAS B: 2017-95]</option><option>MBARUSHIMANA Eric [L5 MAS B: 2017-99]</option><option>TUYISENGE Vianney [L5 MAS B: 2017-100]</option><option>RUKERIBUGA David [L5 MAS B: 2017-103]</option><option>KAYITARE Azimu Samy [L5 MAS B: 2017-105]</option><option>IRADUKUNDA Abdulswamad [L5 MAS B: 2017-109]</option><option>KWIZERA Aaron [L5 MAS B: 2017-110]</option><option>NDERERIMANA Alexandre [L5 MAS B: 2017-114]</option><option>IRANZI Cedric [L5 MAS B: 2017-118]</option><option>RUGWIRO Darlose [L5 MAS B: 2017-119]</option><option>CYUBAHIRO Aristide [L5 MAS B: 2017-130]</option><option>HIRWA Emmanuel [L5 MAS B: 2017-136]</option><option>SANO Landry Djorkaef [L5 MAS B: 2017-140]</option><option>SHYAKA Jean D Amour [L5 MAS B: 2017-145]</option><option>MUKIZA Honore [L5 MAS B: 2017-146]</option><option>HABUMUGISHA Albert [L5 MAS B: 2017-149]</option><option>GATETE Paul [L5 MAS B: 2018-146]</option><option>NGIRINSHUTI Abdulilahi [L5 MAS B: 2018-154]</option><option>GICIRO Richard [L5 MAS B: 2018-213]</option><option>NDAYISENGA Oreste [L5 RCO: 2017-1]</option><option>MANZI Prince Luccin [L5 RCO: 2017-2]</option><option>UWIZEYE Bertrand [L5 RCO: 2017-3]</option><option>NIYONIZEYE Divin [L5 RCO: 2017-5]</option><option>RUGEMA Aime Celana [L5 RCO: 2017-6]</option><option>SEBAGABO Regis [L5 RCO: 2017-7]</option><option>RUTAYISIRE Aime [L5 RCO: 2017-20]</option><option>GAHIGIRO Van Jovanis [L5 RCO: 2017-21]</option><option>KIGENZA Tresor [L5 RCO: 2017-22]</option><option>AKANAKINTAMA NKURANGA Derrick [L5 RCO: 2017-23]</option><option>INGABIRE Honorine [L5 RCO: 2017-40]</option><option>UMUTONI Kevine [L5 RCO: 2017-41]</option><option>RUTAGENGWA Dickson [L5 RCO: 2017-67]</option><option>ISHIMWE Cedrick [L5 RCO: 2017-82]</option><option>MINANI Claude Cebo [L5 RCO: 2017-85]</option><option>GATABAZI Janvier [L5 RCO: 2017-92]</option><option>HABIMANA Regis [L5 RCO: 2017-101]</option><option>IRADUKUNDA Nusura [L5 RCO: 2017-107]</option><option>MUKESHIMANA Catherine [L5 RCO: 2017-117]</option><option>NTUKABUMWE Christian [L5 RCO: 2017-124]</option><option>TUYISENGE Arsene [L5 RCO: 2018-139]</option><option>NIYIZURUGERO Eric [L5 RCO: 2018-203]</option><option>MARARA Frank [L5 SFD: 2017-28]</option><option>UWIMANA Eric [L5 SFD: 2017-29]</option><option>NDATIMANA Sabine [L5 SFD: 2017-30]</option><option>RWABIRANGA Nicolas [L5 SFD: 2017-34]</option><option>NGANIMANA Eric [L5 SFD: 2017-36]</option><option>TUMUSHIME Leonard [L5 SFD: 2017-86]</option><option>UMUHIRE GATESI Lyse [L5 SFD: 2017-87]</option><option>NSHUTI NGABO Yvan [L5 SFD: 2017-94]</option><option>UWIMANA Yvette [L5 SFD: 2017-137]</option><option>CYUZUZO UMWARI Marie Claudine [L5 SFD: 2017-139]</option><option>TUYISHIME Honore [L5 SFD: 2017-141]</option><option>RUTEMBESA SHEMA Elvis [L5 SFD: 2017-155]</option><option>MBABAZI Djibril [L5 SFD: 2018-125]</option><option>IRADUKUNDA Nasra [L5 SFD: 2018-126]</option><option>KAYIRANGA Abdoul [L5 SFD: 2018-131]</option><option>MUHIRE Elisee [L5 SFD: 2018-212]</option><option>NGABO Aime [L5 SFD: 2018-218]</option><option>NTIHEMUKA UWERA Nuswaiba [L5 SFD: 2019-1]</option><option>GATERA GANZA Ghislain [L4 SFD: 2019-2]</option><option>NISHYA MUNYANZIZA Hesiode [L5 SFD: 2019-3]</option><option>MUHIRWA Serge [L5 SFD: 2019-4]</option><option>UMWALI Allesia Kelly [L4 SFD: 2019-5]</option><option>SHEMA KING Declan [L4 SFD: 2019-6]</option><option>UWAMAHORO Vérité [L4 SFD: 2019-7]</option><option>NISHIMWE Promesse [L4 SFD: 2019-8]</option><option>ISHIMWE Obed Julien [L4 SFD: 2019-9]</option><option>NDIZEYE Alain Prince [L4 SFD: 2019-10]</option><option>MADJALIWA Djibril [L4 SFD: 2019-11]</option><option>BIZIMANA Credo [L4 SFD: 2019-12]</option><option>UWIHOREYE Kelly [L4 SFD: 2019-13]</option><option>HIRWA Bedrine [L4 SFD: 2019-14]</option><option>NSHUTI Kevin [L4 SFD: 2019-15]</option><option>TUYIZERE Seremani [L3 CAP: 2019-16]</option><option>MUHOZA MANZI Jean Nepomuscene [L4 SFD: 2019-17]</option><option>IRADUKUNDA Pacifique [L4 SFD: 2019-18]</option><option>NDUNGUTSE Darsin [L4 SFD: 2019-19]</option><option>SHEMA Christian [L4 SFD: 2019-20]</option><option>UWASE Shakila [L4 SFD: 2019-21]</option><option>MUTISIGA Sana [L4 SFD: 2019-22]</option><option>SHEMA Jean Robert [L4 SFD: 2019-23]</option><option>GASORE Ayman [L4 SFD: 2019-24]</option><option>HABIYAREMYE Nadhwif [L4 SFD: 2019-25]</option><option>GASHEMA Emmanuel [L4 SFD: 2019-26]</option><option>TWAGIRIMANA SHEMA Arnaud [L4 SFD: 2019-27]</option><option>MUSHAYIJA Wagner [L4 SFD: 2019-28]</option><option>UWAYO Noella Nelly [L4 SFD: 2019-29]</option><option>DUSHIME SANGWA Bertrand [L4 SFD: 2019-30]</option><option>MANYWA Ghislain [L4 SFD: 2019-31]</option><option>MUGENI Raissa [L4 SFD: 2019-32]</option><option>ISHIMWE NSANZIMFURA Akeem [L4 SFD: 2019-33]</option><option>MANZI Abdul Hakim Nesta [L4 SFD: 2019-34]</option><option>TUYISHIME Abbas [L4 SFD: 2019-35]</option><option>NIYONZIMA Ismael Anelka [L4 SFD: 2019-36]</option><option>TUYISHIME Bruce [L3 CAP: 2019-37]</option><option>MUKAMFIZI Ange Ritha [L4 SFD: 2019-38]</option><option>TUYIZERE Jean Sauveur [L4 SFD: 2019-39]</option><option>KIREZI NSHUTI Fabrice [L4 SFD: 2019-40]</option><option>HIRWA Walid [L4 SFD: 2019-41]</option><option>DUSHIMIRE CYUZUZO Espoir [L4 SFD: 2019-42]</option><option>BIMENYIMANA Fabiola [L4 SFD: 2019-43]</option><option>INGABIRE Denyse [L4 SFD: 2019-44]</option><option>RURIKANWA Louis Kelly [L4 SFD: 2019-45]</option><option>BIFATA Faysal [L4 MAS A: 2019-46]</option><option>CYUZUZO SAMAZA Bruce [L4 MAS A: 2019-47]</option><option>GANZA Osée [L3 MAS: 2019-48]</option><option>GASANA Bruno [L3 MAS: 2019-49]</option><option>GATERA GWIZA Klein [L3 MAS: 2019-50]</option><option>Happy Flavour [L4 MAS A: 2019-51]</option><option>HATANGIMANA Djibrire [L4 MAS A: 2019-52]</option><option>IMANISHIMWE Olivier [L4 MAS A: 2019-53]</option><option>IMANZI Fiori [L4 MAS A: 2019-54]</option><option>IRADUKUNDA Josue [L4 MAS A: 2019-55]</option><option>IRADUKUNDA Christian [L4 MAS A: 2019-56]</option><option>ISHIMWE Emmanuel [L4 MAS A: 2019-57]</option><option>ISHIMWE Rado Hassan [L4 MAS A: 2019-58]</option><option>USHIMWE Jean Luc [L4 MAS A: 2019-59]</option><option>KABANDA Theoneste [L4 MAS A: 2019-60]</option><option>KAGABA Alain [L4 MAS A: 2019-61]</option><option>KAMARI Jean Claude [L4 MAS A: 2019-62]</option><option>KANANURA Mun dhiru [L4 MAS A: 2019-63]</option><option>KAYIRANGA Fidele [L3 MAS: 2019-64]</option><option>KWITONDA SHEMA Prince [L4 MAS A: 2019-65]</option><option>KWIZERA Solo [L4 MAS A: 2019-66]</option><option>MAHIRWE Abdul Kheri [L4 MAS A: 2019-67]</option><option>MIGAMBI SHYAKA Beltrand [L4 MAS A: 2019-68]</option><option>MIZERO Cedric [L3 MAS: 2019-69]</option><option>MUGISHA Omar [L4 MAS A: 2019-70]</option><option>MUNYAKAZI Junior [L4 MAS A: 2019-71]</option><option>MUNYANEZA Gael [L4 MAS A: 2019-72]</option><option>MUPENZI Hamimu [L4 MAS A: 2019-73]</option><option>MURENZI Aubin [L3 MAS: 2019-74]</option><option>NDATIMANA Halidi [L4 MAS A: 2019-75]</option><option>NGENDAHAYO Issa [L4 MAS A: 2019-76]</option><option>NTWALI Daniel [L4 MAS A: 2019-77]</option><option>NYARWAYA Fred [L3 MAS: 2019-78]</option><option>NZANAHAYO Waridi [L4 MAS A: 2019-79]</option><option>RUBONA MUSHANA Yvan [L4 MAS A: 2019-80]</option><option>RUKUNDO Serge [L4 MAS A: 2019-81]</option><option>RUTAGENGWA Didier [L4 MAS A: 2019-82]</option><option>TUYISHIME Dany [L4 MAS A: 2019-83]</option><option>UMUTONI Umusalama [L4 MAS A: 2019-84]</option><option>UWAMBAJE Obed [L4 MAS A: 2019-85]</option><option>UWIMANA Ahmed Ibrahim [L4 MAS A: 2019-86]</option><option>RUHAMA Thierry [L4 MAS A: 2019-87]</option><option>MUGISHA Priest Caleb [L4 MAS A: 2019-88]</option><option>HIRWA Abdoul Ghaffar [L4 MAS A: 2019-89]</option><option>SEKANYAMBO Yassin [L4 MAS B: 2019-90]</option><option>RUGAMBA Elisa [L5 MAS B: 2019-91]</option><option>ISHIMWE MUKIMBIRI Alfred [L5 MAS B: 2019-92]</option><option>NGIRIMANA Saddy [L5 MAS A: 2019-93]</option><option>RUTABANA Patrick [L4 MAS B: 2019-94]</option><option>IZABIKORA Regis [L5 MAS A: 2019-95]</option><option>IRADUKUNDA Cyriaque [L5 MAS A: 2019-96]</option><option>MEZA Toussaint Wiltold [L5 MAS B: 2019-97]</option><option>MUKANDAHIRO Aline [L5 MAS A: 2019-98]</option><option>RUTAYISIRE Djihadi [L5 MAS A: 2019-99]</option><option>UMUHIRE Fabrice [L4 RCO: 2019-100]</option><option>CYUZUZO Lambert [L4 RCO: 2019-101]</option><option>ITANGISHATSE Yves MUGISHA [L3 RCO: 2019-102]</option><option>MBABAZI Ange [L3 RCO: 2019-103]</option><option>MUKUNZI Elie [L4 RCO: 2019-104]</option><option>KANYANDEKWE Luc [L4 RCO: 2019-105]</option><option>MANZI NSENGIYUMVA Alain Thierry [L4 RCO: 2019-106]</option><option>WASHARONI Alona [L4 RCO: 2019-107]</option><option>BYIRINGIRO Honore [L4 RCO: 2019-108]</option><option>IRYAMUKURU Amos [L4 RCO: 2019-109]</option><option>NDASHIMYE Gad [L4 RCO: 2019-110]</option><option>ISHIMWE Jehovanis [L3 RCO: 2019-111]</option><option>KWIBUKA Patrick [L4 RCO: 2019-112]</option><option>NSHUTI Roy Guillain [L4 RCO: 2019-113]</option><option>RUTAGENGWA David [L4 RCO: 2019-114]</option><option>UWASE Nusrath [L4 RCO: 2019-115]</option><option>AKIMANA Rosine [L4 RCO: 2019-116]</option><option>GISA Lionel Ahmed [L3 RCO: 2019-117]</option><option>MUHIRE Ih saan [L4 RCO: 2019-118]</option><option>SHEMA Yvan [L4 RCO: 2019-119]</option><option>MUYOMBANO David Beckham [L4 RCO: 2019-120]</option><option>RUKUNDO Faustin [L4 RCO: 2019-121]</option><option>GHANDI Clemence [L4 RCO: 2019-122]</option><option>IRUMVA NYANDWI Robert [L4 RCO: 2019-123]</option><option>HABAMUNGU Guylain [L4 RCO: 2019-124]</option><option>MUGABO Ramadhan [L4 RCO: 2019-125]</option><option>HATEGEKIMANA Eric [L3 MAS: 2019-127]</option><option>HIRWA Chris [L4 SFD: 2019-128]</option><option>TUYISHIME Zacharie [L4 SFD: 2019-134]</option><option>MUGISHA Steven [L3 MAS: 2019-129]</option><option>IYANGO Jacques [L4 MAS A: 2019-130]</option><option>GUSENGA Sam [L5 MAS A: 2019-131]</option><option>IRADUKUNDA Jean Bosco [L4 SFD: 2019-132]</option><option>AGABA Fred [L5 MAS A: 2019-133]</option><option>ISHIMWE Vanessa [L4 SFD: 2019-135]</option><option>RURANGIRWA Darling [L4 MAS A: 2019-136]</option><option>RUDASINGWA Armand [S4 CST A: 2016-322]</option><option>ISHIMWE Shema [S4 CST A: 2016-326]</option><option>IGISUBIZO Bertiste [S4 CST A: 2016-327]</option><option>NDAYAMBAJE Jean Bonheur [S4 CST A: 2016-328]</option><option>KAMUHANDA Ronald [S4 CST B: 2016-397]</option><option>MURWANASHYAKA Gabriel [S4 PWO: 2016-282]</option><option>INGABIRE Claudine [S4 SURV: 2016-279]</option><option>BYIRINGIRO Elie [S5 CST A: 2016-3]</option><option>KALIMUNDA Harris [S5 CST A: 2016-9]</option><option>NGABONZIZA Cedrick [S5 CST A: 2016-19]</option><option>NSENGIYUMVA Christopher [S5 CST A: 2016-25]</option><option>BIZIMANA Patrick [S5 CST A: 2016-34]</option><option>NIZEYIMANA ADUHIRE Yassyn [S5 CST A: 2016-260]</option><option>TWAGIRAYEZU CÃ©drick Christopher [S5 CST A: 2016-264]</option><option>MUCYO Ibrahim [S5 CST A: 2016-266]</option><option>NSENGIYUMVA Hussein [S5 CST A: 2016-302]</option><option>UWINEZA Halimat [S5 CST A: 2016-351]</option><option>KEVINE Umunyana [S5 CST A: 2017-72]</option><option>GHAMAL Nassor [S5 CST B: 2016-4]</option><option>BYIRIGIRO Pacifique [S5 CST B: 2016-35]</option><option>IRABARUTA Gerry stapin [S5 CST B: 2016-38]</option><option>MIHIGO Yves [S5 CST B: 2016-46]</option><option>NDUHURA GIHOZO Christian [S5 CST B: 2016-54]</option><option>NKUNDABAYO Aimable [S5 CST B: 2016-56]</option><option>NYANDEKWE Elie [S5 CST B: 2016-59]</option><option>ISHIMWE Yves Thierry [S5 CST B: 2016-344]</option><option>IGIHOZO KAYISIRE Patient [S5 CST B: 2016-384]</option><option>NYANDWI Jonathan [S5 CST B: 2017-78]</option><option>NIYITEGEKA Jules William [S5 PWO: 2016-380]</option><option>HIRWA Jean AimÃ© [S5 PWO: 2016-193]</option><option>NIYONZIMA Papias [S5 PWO: 2016-211]</option><option>RWIBUTSO Djamarat [S5 PWO: 2016-219]</option><option>TUYISHIME Emmanuel [S5 PWO: 2016-225]</option><option>TUYIZERE Yvan Marc [S5 PWO: 2016-226]</option><option>UWAYEZU Jean Claude [S5 PWO: 2016-227]</option><option>SHIMWE GATSINZI Jean Rene [S5 PWO: 2016-284]</option><option>UWERA Thierry [S5 PWO: 2016-289]</option><option>KEVIN Hakizimana [S5 PWO: 2017-79]</option><option>ABAYO Alcene [S6 CST: 2016-1]</option><option>BYIRINGIRO Rodrigue [S6 CST: 2016-2]</option><option>ISHIMWE Cedric [S6 CST: 2016-6]</option><option>ISHIMWE Olivier [S6 CST: 2016-7]</option><option>ISHIMWE Gift Bienvenue [S6 CST: 2016-8]</option><option>KAYINAMURA Marius [S6 CST: 2016-10]</option><option>KIRENGA Christian Irene [S6 CST: 2016-11]</option><option>RIZINDE Jean de Dieu [S6 CST: 2016-12]</option><option>MANIRIHO Eliab [S6 CST: 2016-13]</option><option>MUGISHA Jonathan [S6 CST: 2016-14]</option><option>MURENZI Lionel [S6 CST: 2016-16]</option><option>MUTUYIMANA Eric [S6 CST: 2016-17]</option><option>MUVUNYI Peter [S6 CST: 2016-18]</option><option>NGIRIMANA Kiki [S6 CST: 2016-20]</option><option>NIYIGENA Augustin [S6 CST: 2016-21]</option><option>NIYOMWUNGERI Jean AimÃ© [S6 CST: 2016-22]</option><option>NIYONKURU Lewis [S6 CST: 2016-24]</option><option>RUGWIZANGOGA Patrick [S6 CST: 2016-26]</option><option>RWANYINDO SUGIRA Alexandre Mike [S6 CST: 2016-28]</option><option>SHYAKA Blaise [S6 CST: 2016-29]</option><option>UMUHOZA Nadia [S6 CST: 2016-31]</option><option>UMUTONI Gratia [S6 CST: 2016-32]</option><option>BAVUMIRAGIRA Shafi [S6 CST: 2016-33]</option><option>HABINEZA Charles [S6 CST: 2016-36]</option><option>IRADUKUNDA TimothÃ©e [S6 CST: 2016-40]</option><option>ISHIMWE  SENTANALI Thierry [S6 CST: 2016-41]</option><option>KANYANZIRA Jean Bosco [S6 CST: 2016-43]</option><option>KAYIJUKA Patrick [S6 CST: 2016-44]</option><option>MANZI Laurent [S6 CST: 2016-45]</option><option>MIZERO Cedrick [S6 CST: 2016-47]</option><option>MUGISHA Pacifique [S6 CST: 2016-48]</option><option>MUNYANZIZA Fidele [S6 CST: 2016-49]</option><option>NDANYUZWE Gaddy [S6 CST: 2016-51]</option><option>NIYONSHUTI Jean Paul [S6 CST: 2016-55]</option><option>NSHIMYUMUREMYI Ernest [S6 CST: 2016-57]</option><option>NTIZANDEKA Enock [S6 CST: 2016-58]</option><option>NZARAMBA Owen [S6 CST: 2016-60]</option><option>UWANTEGE Gaelle [S6 CST: 2016-62]</option><option>BASHANA Frank [S6 CST: 2016-64]</option><option>BISENGIMANA Jean Claude [S6 CST: 2016-65]</option><option>BYIRINGIRO Felix [S6 CST: 2016-66]</option><option>GAKWAYA Philbert [S6 CST: 2016-67]</option><option>GATETE Saleh [S6 CST: 2016-68]</option><option>HABINEZA Ibrahim [S6 CST: 2016-71]</option><option>HABINEZA Peter [S6 CST: 2016-72]</option><option>HAKIZIMANA Gerard [S6 CST: 2016-73]</option><option>IBYIMANIKORA Wilson [S6 CST: 2016-74]</option><option>IKUZWE Japhet [S6 CST: 2016-75]</option><option>IMANISHIMWE Clarisse [S6 CST: 2016-76]</option><option>INGABIRE Vestine [S6 CST: 2016-77]</option><option>IRADUKUNDA Jean Marie Vianney [S6 CST: 2016-78]</option><option>IRARISHOHOJE Bonheur [S6 CST: 2016-79]</option><option>IRANKUNDA Octave [S6 CST: 2016-80]</option><option>ISABANE BÃ©nitha [S6 CST: 2016-81]</option><option>KANTETERE Nada [S6 CST: 2016-82]</option><option>KWITONDA Kelly Celestin [S6 CST: 2016-83]</option><option>KWIZERA Adelphose [S6 CST: 2016-84]</option><option>MASASA Didier [S6 CST: 2016-85]</option><option>MUGISHA Jules [S6 CST: 2016-87]</option><option>MUGISHA  NGABO David [S6 CST: 2016-88]</option><option>MUNYAGISHARI Yazidi [S6 CST: 2016-89]</option><option>MUNYARUKIGA Eloi [S6 CST: 2016-90]</option><option>MUTIMUKUNZE Jean de Dieu [S6 CST: 2016-92]</option><option>NDAGIJIMANA Basile [S6 CST: 2016-93]</option><option>NDAGIJIMANA Patrick [S6 CST: 2016-94]</option><option>NAYIGIZENTE Evode [S6 CST: 2016-95]</option><option>NGIRIMANA Arthur Dejemeppe [S6 CST: 2016-97]</option><option>NGIRUWONSANGA David [S6 CST: 2016-98]</option><option>NIBISHAKA Patrick [S6 CST: 2016-99]</option><option>NIYIGENA Pacifique [S6 CST: 2016-100]</option><option>NIYITEGEKA Dieudonne [S6 CST: 2016-101]</option><option>NIYONKURU Mudathir [S6 CST: 2016-102]</option><option>NSABIMANA Fidayi [S6 CST: 2016-103]</option><option>NSABIMPA Fabrice [S6 CST: 2016-104]</option><option>NSHIZIRUNGU Bienvenue [S6 CST: 2016-106]</option><option>NTABANGANYIMANA Pacifique [S6 CST: 2016-107]</option><option>NTAMBARA Olivier [S6 CST: 2016-108]</option><option>NTAWUMENYUMUNSI Irene [S6 CST: 2016-109]</option><option>KWIZERA Jean Paul [S6 CST: 2016-110]</option><option>NYAGATARE ISHIMWE Brian [S6 CST: 2016-111]</option><option>RWIBUTSO Jean [S6 CST: 2016-113]</option><option>RUBIBI NTAGUGURA Alexis [S6 CST: 2016-114]</option><option>RUKUNDO Nicolas [S6 CST: 2016-115]</option><option>SHEMA  NGABO Cedrick [S6 CST: 2016-117]</option><option>TUYISHIME Pierre [S6 CST: 2016-120]</option><option>TUYISHIMIRE Credo Sylvestre [S6 CST: 2016-121]</option><option>UMWIZA Nadjah  Assoumani [S6 CST: 2016-122]</option><option>UWASE Diane [S6 CST: 2016-123]</option><option>UWASE Fabiola [S6 CST: 2016-124]</option><option>UWISHEMA Jacques [S6 CST: 2016-125]</option><option>ISHIMWE Lauriane [S6 CST: 2016-243]</option><option>KWIZERA Chrispin [S6 CST: 2016-252]</option><option>ISHIMWE Bilali [S6 CST: 2016-254]</option><option>UWIZEYIMANA Ziada [S6 CST: 2016-255]</option><option>RUHAMBIRA Araphati [S6 CST: 2016-256]</option><option>TUYISHIMIRE Elvis [S6 CST: 2016-258]</option><option>HIRWA MITALI YVAN [S6 CST: 2016-390]</option><option>MUNYANEZA Abdoulkarim [S6 CST: 2016-262]</option><option>USABWIMANA Michel [S6 CST: 2016-263]</option><option>KIGELI Patrick [S6 CST: 2016-265]</option><option>KAMUGISHA Fred [S6 CST: 2016-267]</option><option>RUGERO JUNIOR Papin [S6 CST: 2016-268]</option><option>KATETE Muhamoud [S6 CST: 2016-269]</option><option>MUGISHA Fred [S6 CST: 2016-309]</option><option>TUYISHIMIRE Kassim [S6 CST: 2016-389]</option><option>GATSINZI Frank [S6 CST: 2016-359]</option><option>NIMBONA Audrey [S6 CST: 2016-391]</option><option>KOMEZAGUSENGA Maranatha [S6 CST: 2016-402]</option><option>GATUNGE George [S6 CST: 2016-404]</option><option>KANYABUTEMBO Darcy [S6 CST: 2016-405]</option><option>SEBASHI Khaled [S6 CST: 2017-27]</option><option>KIRENGA Amani [S6 CST: 2017-75]</option><option>ISHIMWE Saddy [S6 CST: 2017-108]</option><option>IMANZI Blaise [S6 CST A: 2016-392]</option><option>KAMANZI Remy Camarade [S6 CST A: 2016-378]</option><option>ABAYO Honore [S6 CST A: 2016-253]</option><option>TUMUKUNDE Sandrine [S6 CST A: 2016-306]</option><option>IRADUKUNDA Patrick Sauveur [S6 CST A: 2016-308]</option><option>MUVUNYI Charles [S6 CST A: 2016-310]</option><option>UWIMANA Papias [S6 CST A: 2016-313]</option><option>MBARUSHIMANA Hassan [S6 CST A: 2016-316]</option><option>NSENGIYUMVA Kenny Rogers [S6 CST A: 2016-318]</option><option>SINDUHIJE Djuma [S6 CST A: 2016-319]</option><option>HAKIZUMWAMI Sympathique [S6 CST A: 2016-323]</option><option>MUCYO Valery [S6 CST A: 2016-324]</option><option>BAYAVUGE Djamilla [S6 CST A: 2016-325]</option><option>ITONDE Maxime [S6 CST A: 2016-333]</option><option>NSENGIYUMVA Gentil [S6 CST A: 2016-338]</option><option>NZEYIMANA NGABO Cedrick [S6 CST A: 2016-340]</option><option>DUSABE Willy Chris [S6 CST A: 2016-343]</option><option>GASANGWA Clement [S6 CST A: 2016-345]</option><option>NDAYISHIMIYE Fabrice [S6 CST A: 2016-346]</option><option>RUZIRABWOBA Jonas [S6 CST A: 2016-348]</option><option>MUGISHA Isaac [S6 CST A: 2016-349]</option><option>INEMA Christian [S6 CST A: 2016-357]</option><option>NIYONKURU UWAYEZU Odilo [S6 CST A: 2016-360]</option><option>INEZA Emelyne [S6 CST A: 2017-25]</option><option>NDIKUMANA Shemussa [S6 CST A: 2017-26]</option><option>MUKUNZI Osee [S6 CST A: 2017-42]</option><option>NSHIMIYIMANA Eric [S6 CST A: 2017-77]</option><option>DUSABE Bebeto [S6 CST A: 2017-121]</option><option>UMUTONIWASE Clemence [S6 CST A: 2017-154]</option><option>BUKURU Furaha Didier [S6 CST A: 2018-140]</option><option>KAYIGAMBA Daniel [S6 CST A: 2018-141]</option><option>UWINEZA Hallmat [S6 CST A: 2018-143]</option><option>ISHIMWE Patience [S6 CST A: 2018-152]</option><option>BYIRINGIRO Yannick [S6 CST A: 2018-214]</option><option>NGABOYIMANZI Ferdinand [S6 CST A: 2018-217]</option><option>KUZWA Yvan Kevin  Parfait [S6 CST B: 2016-379]</option><option>ISHIMWE Patrick [S6 CST B: 2016-304]</option><option>IGIRANEZA Henry [S6 CST B: 2016-305]</option><option>KAMUGABO Eric [S6 CST B: 2016-307]</option><option>MUNYESHYAKA Arnauld [S6 CST B: 2016-312]</option><option>MUTABAZI Steve [S6 CST B: 2016-314]</option><option>NIYOTWAGIRA Yasser  Assouman [S6 CST B: 2016-315]</option><option>BUCYANAYANDI Joseph [S6 CST B: 2016-317]</option><option>NDAGIJIMANA Aimable [S6 CST B: 2016-320]</option><option>MUNEZERO Fulgence [S6 CST B: 2016-321]</option><option>INEZA Alain Nicolas [S6 CST B: 2016-329]</option><option>INGABIRE Sandra [S6 CST B: 2016-330]</option><option>KOMEZUBUTWARI Fabrice [S6 CST B: 2016-331]</option><option>MUPENZI TWAGIRAYEZU Serge [S6 CST B: 2016-334]</option><option>MANZI Arsene [S6 CST B: 2016-335]</option><option>OKENDE Tresor [S6 CST B: 2016-337]</option><option>NSENGIYUMVA RUGERO Jean Marie Vianney [S6 CST B: 2016-341]</option><option>NDAYISABA Emmanuel [S6 CST B: 2016-342]</option><option>SHUMBUSHO Alain [S6 CST B: 2016-347]</option><option>HABIMANA Lucky Mervel [S6 CST B: 2016-350]</option><option>HABINEZA Jean Philippe [S6 CST B: 2016-352]</option><option>TUYISENGE Muzammiru [S6 CST B: 2016-353]</option><option>MAZIMPAKA Esri [S6 CST B: 2016-354]</option><option>MUGISHA Cedric [S6 CST B: 2016-355]</option><option>ZANINKA Alice [S6 CST B: 2016-358]</option><option>NIYONGABO Emmanuel [S6 CST B: 2016-396]</option><option>KAMANZI Renaud [S6 CST B: 2017-43]</option><option>AKANAKINTAMA Adelphine [S6 CST B: 2017-66]</option><option>GISUBIZO Dieudonne [S6 CST B: 2017-76]</option><option>NCOGOZA NKUBIRI Djibrile [S6 CST B: 2017-106]</option><option>RUDAHINYUKA Dieudonne [S6 CST B: 2017-125]</option><option>TUMUKUNDE Deborah [S6 CST B: 2017-156]</option><option>UMUBYEYI Christine [S6 CST B: 2018-142]</option><option>NYAMUGIRA Elie [S6 CST B: 2018-155]</option><option>MUGISHA Steven [S6 CST B: 2018-148]</option><option>NSHIMIYIMANA Emmanuel [S6 CST B: 2018-206]</option><option>BAYINGANA Bob Avit [S6 CST B: 2018-219]</option><option>MANZI Prince [S6 PWO: 2016-372]</option><option>GAKWERERE  NDAMUKUNDA Pacifique [S6 PWO: 2016-157]</option><option>GATETE Marcellin [S6 PWO: 2016-158]</option><option>HABUMUGISHA Patrick [S6 PWO: 2016-159]</option><option>HATEGEKIMANA Frank [S6 PWO: 2016-160]</option><option>IRADUKUNDA Evodia [S6 PWO: 2016-161]</option><option>ISHIMWE Jules ThÃ©ophile [S6 PWO: 2016-162]</option><option>KUBWIMANA Maurice [S6 PWO: 2016-164]</option><option>MUGISHA ClÃ©ment [S6 PWO: 2016-165]</option><option>NSHIMIYIMANA Jean Claude [S6 PWO: 2016-393]</option><option>MWESIGYE Isaac [S6 PWO: 2016-167]</option><option>MWIZERWA Anne Mireille [S6 PWO: 2016-168]</option><option>NDAYIZEYE Joyeuse [S6 PWO: 2016-169]</option><option>NIYIREMA Thierry [S6 PWO: 2016-170]</option><option>NIYOMUREMYI Pacifique [S6 PWO: 2016-172]</option><option>NIYONKURU Ally [S6 PWO: 2016-173]</option><option>NIZEYIMANA Vivier Eduine [S6 PWO: 2016-175]</option><option>NKURUNZIZA Emmanuel [S6 PWO: 2016-176]</option><option>NSHIMIYIMANA Jean de Dieu [S6 PWO: 2016-177]</option><option>NTAKIRUTIMANA Fidele [S6 PWO: 2016-178]</option><option>NTWALI Olivier [S6 PWO: 2016-179]</option><option>RWANYINDO MUCYO KÃ©vin [S6 PWO: 2016-180]</option><option>SHIMIRWAMUKIZA Felix [S6 PWO: 2016-181]</option><option>SHUMBUSHO Aboudhabi [S6 PWO: 2016-182]</option><option>TURATSIZE Jean Bosco [S6 PWO: 2016-183]</option><option>TWEMBI Patrick [S6 PWO: 2016-184]</option><option>UWITONZE Yves [S6 PWO: 2016-186]</option><option>AYABAGABO Frank [S6 PWO: 2016-187]</option><option>BISENGIMANA David [S6 PWO: 2016-188]</option><option>BIZIMANA Camarade [S6 PWO: 2016-189]</option><option>DUSHIME Faustin [S6 PWO: 2016-190]</option><option>DUSINGIZIMANA Dominique Savio [S6 PWO: 2016-191]</option><option>GAHIGI Jean Bosco [S6 PWO: 2016-192]</option><option>IMANIRAKIZA Jean de la  Croix [S6 PWO: 2016-194]</option><option>ISHIMWE Benjamin [S6 PWO: 2016-196]</option><option>KAYUMBA Regis [S6 PWO: 2016-198]</option><option>KWAME Ken [S6 PWO: 2016-200]</option><option>MANZI Yvan Blaise [S6 PWO: 2016-201]</option><option>MASENGESHO Dorice [S6 PWO: 2016-202]</option><option>MISIGARO Faustin [S6 PWO: 2016-203]</option><option>MUGABO Robin  Patrick [S6 PWO: 2016-204]</option><option>MUHAWENIMANA Jean Paul [S6 PWO: 2016-205]</option><option>MUKIZA Emmanuel [S6 PWO: 2016-206]</option><option>MUREGO MURENZI Bryan [S6 PWO: 2016-207]</option><option>MUSABYIMANA Angelique [S6 PWO: 2016-208]</option><option>NGWINONDEBE Djazila [S6 PWO: 2016-209]</option><option>NIYONGABO Jean Paul [S6 PWO: 2016-374]</option><option>NKUSI Eric [S6 PWO: 2016-212]</option><option>NSENGIYUMVA Christian [S6 PWO: 2016-213]</option><option>NTAMBARA James [S6 PWO: 2016-214]</option><option>NYAKONGEZA Djanati [S6 PWO: 2016-215]</option><option>RUGWIRO Eric [S6 PWO: 2016-217]</option><option>RUTAYISIRE Aimable [S6 PWO: 2016-218]</option><option>RWIGEMERA Jean Felix [S6 PWO: 2016-220]</option><option>SHEJA Thierry [S6 PWO: 2016-221]</option><option>ISHIMWE Jean Luc [S6 PWO: 2016-373]</option><option>TUYISENGE Daniel [S6 PWO: 2016-223]</option><option>TUYISENGE Jeanne [S6 PWO: 2016-224]</option><option>UWINEZA FortunÃ©e [S6 PWO: 2016-228]</option><option>RUKUNDO Pacifique [S6 PWO: 2016-242]</option><option>UMWIZA Latifa [S6 PWO: 2016-246]</option><option>GANZA Norry [S6 PWO: 2016-247]</option><option>CYUSA Bruce [S6 PWO: 2016-248]</option><option>UWASE Nadia [S6 PWO: 2016-249]</option><option>UWIMANA Ruth [S6 PWO: 2016-250]</option><option>SEMUHUNGU Vital [S6 PWO: 2016-251]</option><option>GAKWAYA IRADUKUNDA Cedrick [S6 PWO: 2016-281]</option><option>UWAMAHORO Aline [S6 PWO: 2016-283]</option><option>UWINEZA Iris [S6 PWO: 2016-285]</option><option>IRADUKUNDA Oussam [S6 PWO: 2016-286]</option><option>KIGENZA Jean Kelsy [S6 PWO: 2016-288]</option><option>HATEGEKIMANA Aboubakar [S6 PWO: 2016-290]</option><option>NTWALI IRADUKUNDA Chris [S6 PWO: 2016-291]</option><option>NKURUNZIZA Jean Luc [S6 PWO: 2016-294]</option><option>MBAYIRE Schalom [S6 PWO: 2016-295]</option><option>NIYONKURU Peace [S6 PWO: 2016-296]</option><option>DUSABE Emmanuel [S6 PWO: 2016-297]</option><option>UMUGWANEZA Alice [S6 PWO: 2016-298]</option><option>NSHIZIRUNGU Bienvenue [S6 PWO: 2016-299]</option><option>BYIRINGIRO Jimmy [S6 PWO: 2016-300]</option><option>IKIREZI Olga Gonzaleze [S6 PWO: 2016-303]</option><option>HIRWA Nabil [S6 PWO: 2016-375]</option><option>RUTAMBUKA Guerain [S6 PWO: 2016-376]</option><option>NIYIMFASHA Emmanuel [S6 PWO: 2016-381]</option><option>IRADUKUNDA Eric [S6 PWO: 2016-398]</option><option>BIZUMUTIMA Edouard [S6 PWO: 2016-399]</option><option>SIBOMANA Bielive [S6 PWO: 2016-403]</option><option>NIWENKUNDA Patience Gilty [S6 PWO: 2017-4]</option><option>NIYONGABO Patrick [S6 PWO: 2017-111]</option><option>IMANISHIMWE Assuma [S6 PWO: 2017-143]</option><option>NIYITANGA Valery [S6 PWO: 2017-152]</option><option>MUBIRIGI Gabriel [S6 PWO: 2018-144]</option><option>NIYONTEZE Francois Xavier [S6 PWO: 2018-216]</option><option>KUBWIMANA Jean D Amour [S6 SURV: 2016-371]</option><option>MUHIRWA Venuste [S6 SURV: 2016-370]</option><option>NSHIMIYIMANA Samalade [S6 SURV: 2016-369]</option><option>NIYONKURU Albert [S6 SURV: 2016-368]</option><option>BAZUBAGIRA UWASE Umulkher [S6 SURV: 2016-367]</option><option>BATAMULIZA Liliane [S6 SURV: 2016-126]</option><option>HATEGEKIMANA Innocent [S6 SURV: 2016-127]</option><option>HODARI Olivier [S6 SURV: 2016-128]</option><option>INGABIRE Jean d Amour [S6 SURV: 2016-129]</option><option>IRADUKUNDA Constantin [S6 SURV: 2016-130]</option><option>IRADUKUNDA Jean d Amour [S6 SURV: 2016-131]</option><option>IRAKOZE Augustin Junior [S6 SURV: 2016-132]</option><option>ISHEMA Bruce [S6 SURV: 2016-133]</option><option>ISHIMWE Seth [S6 SURV: 2016-134]</option><option>ISHIMWE HIGIRO Remy [S6 SURV: 2016-135]</option><option>KAMANZI Shadia [S6 SURV: 2016-136]</option><option>KAYITARE Youssouf [S6 SURV: 2016-137]</option><option>MUGISHA SHEMA Thierry [S6 SURV: 2016-138]</option><option>MUHAWENIMANA Emmanuel [S6 SURV: 2016-139]</option><option>MUTEZINTARE Yves [S6 SURV: 2016-140]</option><option>NIYOMUGABO AimÃ©  Norris [S6 SURV: 2016-142]</option><option>NIYONKUNDA Pacifique [S6 SURV: 2016-143]</option><option>NSHUTI Elie [S6 SURV: 2016-144]</option><option>NYIRAHABIMANA Olive [S6 SURV: 2016-145]</option><option>NYIRARUGAMBA Susane [S6 SURV: 2016-146]</option><option>RUTAYISIRE Dieudonne [S6 SURV: 2016-147]</option><option>TUYISHIME Innocent [S6 SURV: 2016-148]</option><option>TWIZEYIMANA Jean Claude [S6 SURV: 2016-149]</option><option>UJENEZA RUTAMU Christian [S6 SURV: 2016-150]</option><option>UMUHOZA ISHIMWE Justine [S6 SURV: 2016-151]</option><option>UMUTONIWASE Hornella [S6 SURV: 2016-152]</option><option>UWIMANA Hasfat [S6 SURV: 2016-153]</option><option>UWIZEYE Hyguette [S6 SURV: 2016-154]</option><option>UWIZEYE Robert [S6 SURV: 2016-155]</option><option>NDAMUKUNDA Emmanuel [S6 SURV: 2016-365]</option><option>DUSENGE Emmanuel [S6 SURV: 2016-364]</option><option>KAYIRANGA Aimable [S6 SURV: 2016-229]</option><option>BIZIMA Emmanuel [S6 SURV: 2016-230]</option><option>MBABAZI Anitha [S6 SURV: 2016-231]</option><option>MBABAZI Shallon [S6 SURV: 2016-232]</option><option>MUGISHA Steven [S6 SURV: 2016-233]</option><option>NIBAGWIRE Justine [S6 SURV: 2016-234]</option><option>NKANIKA Jackson [S6 SURV: 2016-235]</option><option>RUKUNDO Pacifique [S6 SURV: 2016-236]</option><option>TUYISHIMIRE Aimable [S6 SURV: 2016-237]</option><option>TWAGIRIMANA Joseph [S6 SURV: 2016-238]</option><option>UMUTONIWASE Linda  MarlÃ¨ne [S6 SURV: 2016-239]</option><option>UWIMANA Marie Claire [S6 SURV: 2016-240]</option><option>HATEGEKIMANA Regis [S6 SURV: 2016-241]</option><option>BIGWI Abdul Djabal [S6 SURV: 2016-270]</option><option>UWINEZA Michaelle [S6 SURV: 2016-271]</option><option>RUGEMA Michel [S6 SURV: 2016-272]</option><option>SANGONINI Afadhali Florent [S6 SURV: 2016-273]</option><option>IRADUKUNDA Ibrahim [S6 SURV: 2016-274]</option><option>MUKAMANA Jeanine [S6 SURV: 2016-275]</option><option>TURACYAYISENGA Norbert [S6 SURV: 2016-276]</option><option>MUNYANDEKWE Seth [S6 SURV: 2016-277]</option><option>UMUHOZA Liliane [S6 SURV: 2016-278]</option><option>UWITEKAZABE Israel Omar [S6 SURV: 2016-280]</option><option>IHOZO Gael [S6 SURV: 2016-311]</option><option>MUTANGAMPUNDU Christine [S6 SURV: 2016-386]</option><option>HABIMANA Jean Paul Landry [S6 SURV: 2016-387]</option><option>MICO Frederic [S6 SURV: 2016-388]</option><option>ISHIMWE Chrispin [S6 SURV: 2016-394]</option><option>NTAKIYINANIRA Ismael [S6 SURV: 2016-395]</option><option>UWERA Albertine [S6 SURV: 2016-400]</option><option>RUZIBIZA Eric [S6 SURV: 2016-401]</option><option>GASARABWE Jean Luc [S6 SURV: 2017-24]</option><option>KWIZERA Dieudonne [S6 SURV: 2017-83]</option><option>MUGWANEZA Roger Pacifique [S6 SURV: 2017-84]</option><option>GASARABWE UMUTESI Annick [S6 SURV: 2017-96]</option><option>NIYONKURU Elvis [S6 SURV: 2017-148]</option><option>HIRWA Moses [L4 MAS A: 2019-137]</option><option>ISHIMWE Christian [L4 MAS A: 2019-138]</option><option>IYAKARE Obed Patrick [L4 MAS A: 2019-139]</option><option>INTSINZI Brahim [L3 MAS: 2020-2]</option><option>SEMPUNDU Amaaly [L3 MAS: 2020-3]</option><option>NYARWAYA Yvan [L3 MAS: 2020-4]</option><option>IRADUKUNDA Djunia [L3 MAS: 2020-5]</option><option>MUKUNZI Abdul-Barrik [L3 RCO: 2020-6]</option><option>LAENA Lenny [L3 CAP: 2020-7]</option><option> [L3 LSV: 2020-8]</option><option>GWIZA Derick [L3 MAS: 2020-9]</option><option>MWIZIHIZA Serge [L3 RCO: 2020-10]</option><option>NSHUTI Aime Bruce [L3 RCO: 2020-11]</option><option>BUCYANA Moubarrak [L3 CAP: 2020-12]</option><option>NISHIMWE Innocent [L3 MAS: 2020-13]</option><option>SEZERANO Jean Michael Angelo [L3 CAP: 2020-14]</option><option>CYUSA  Hakim [L3 MAS: 2020-15]</option><option>BAYINGANA Emmy Steven [L3 MAS: 2020-16]</option><option>SHEMA Daniel [L3 CAP: 2020-17]</option><option>HAKIZIMANA Andre [L3 RCO: 2020-18]</option><option>BYIRINGIRO Robert [L3 MAS: 2020-19]</option><option>KAGAMBAGE Kevin [L3 CAP: 2020-20]</option><option>INTWALI Lucky  Miracle Nestor [L3 MAS: 2020-21]</option><option>ISHEMA Hamidu [L3 CAP: 2020-22]</option><option>NYAKANA NGABO Prince [L3 MAS: 2020-23]</option><option>NDAYUMVIYE SHEMA Yannick [L3 MAS: 2020-24]</option><option>MAMASHENGE BIRABONEYE Paula [L3 RCO: 2020-25]</option><option>UMUTONI Labiah [L3 BUS: 2020-26]</option><option>MUGANZA John Kenny Brandon [L5 MAS B: 2020-27]</option><option>DUHIRWE Elvis [L4 MAS A: 2020-28]</option><option>ISHIMWE Marie Betty [L3 CAP: 2020-29]</option><option>IRADUKUNDA Denyse [L3 BUS: 2020-30]</option><option>MURASHI Hassan [L3 MAS: 2020-31]</option><option>NSHIZIRUNGU Daniel [L3 MAS: 2020-32]</option><option>MUHIRE Thierry [L4 MAS A: 2020-33]</option><option>NZABAKIRIRAHO Patimos Yves [L4 RCO: 2020-34]</option><option>NIYONKURU SHEMA Alkham [L3 CAP: 2020-35]</option><option>NIYOMUGENGA Prince Yvan [L3 MAS: 2020-36]</option><option>NIZEYIMANA CYIZERE Beda [L3 RCO: 2020-37]</option><option>AKAYESU Peter [L3 RCO: 2020-38]</option><option>MUNYURANGABO Moses [L5 MAS B: 2020-39]</option><option>TUMUSHIME Tresor [L5 MAS B: 2020-40]</option><option>RANGIRA Kelly [L4 SFD: 2020-41]</option><option>BAREMEKA Emmanuel [L3 RCO: 2020-42]</option><option>KALISA Abdoul Eden [L3 RCO: 2020-43]</option><option>UMWALI Naniella Kellia [L3 RCO: 2020-44]</option><option>ITANGISHATSE Joseph [L3 MAS: 2020-45]</option><option>IZIBYOSE Nadine [L3 RCO: 2020-46]</option><option>NYINAWABERA Nafissa [L3 CAP: 2020-47]</option><option>TUYIRAMYE Emmanuel [L3 MAS: 2020-48]</option><option>MUKOBWAJANA MUCYO Princesse [L3 BUS: 2020-49]</option><option>NDATIMANA Christa [L3 BUS: 2020-50]</option><option>NKURUNZIZA Laden [L3 CAP: 2020-51]</option><option>MUGISHA Pacifique [L3 MAS: 2020-52]</option><option>NIYONKURU Herthier [L3 CAP: 2020-53]</option><option>MURUNGI Claudine [L3 MAS: 2020-54]</option><option>BWENGE Blaise [L3 MAS: 2020-55]</option><option>IRADUKUNDA Thierry [L3 MAS: 2020-56]</option><option>BYIRINGIRO Erisa [L3 MAS: 2020-57]</option><option>RUGWIRO Ken Charmant [L3 CAP: 2020-58]</option><option>TUMUKUNDA Naila [L3 BUS: 2020-59]</option><option>ISHAMI David [L3 CAP: 2020-60]</option><option>CYUZUZO Rene Clavis [L3 CAP: 2020-61]</option><option>MUGISHA Usher [L3 RCO: 2020-62]</option><option>NSABIMANA Arlene [L3 CAP: 2020-63]</option><option>KWIZERA Olivier [L3 MAS: 2020-64]</option><option>NGABO Angelos [L4 SFD: 2020-65]</option><option>BAYIGIRE Nice [L3 CAP: 2020-66]</option><option>NTIBESHYA Gady [L4 RCO: 2020-67]</option><option>ISHIMWE Christian [L3 CAP: 2020-68]</option><option>SANGWA Bonfils [L3 CAP: 2020-69]</option><option>NIYIBIZI Bruce [L3 CAP: 2020-70]</option><option>MPUHWE Dhurkifli [L3 CAP: 2020-71]</option><option>ISIMBI Carine Shifura [L3 RCO: 2020-72]</option><option>MUGABE SHEBA [L3 CAP: 2020-73]</option><option>RUGERO Bruce [L3 RCO: 2020-74]</option><option>NKWAYA Ahmand [L3 MAS: 2020-75]</option><option>UMURERWA Salma [L3 CAP: 2020-76]</option><option>NSABIMANA Emmanuel [L3 RCO: 2020-77]</option><option>IRIZA Frida [L3 BUS: 2020-78]</option><option>IGIRANEZA Deborah [L3 RCO: 2020-79]</option><option>MANZI Abdoulhamid [L3 MAS: 2020-80]</option><option>MANZI Abdoulhamid [L3 MAS: 2020-81]</option><option>RUGWIRO KALISA Muslim [L3 CAP: 2020-82]</option><option> [: 2020-83]</option><option>IMANISHIMWE Elyse [L3 RCO: 2020-84]</option><option>HAKIZIMANA Jacques [L3 MAS: 2020-85]</option><option>UWASE Shadia Merveille [L3 MAS: 2020-86]</option><option>RUGELINYANGE William [L3 RCO: 2020-87]</option><option>MANZI Sharif [L3 CAP: 2020-88]</option><option>tumwesigye Moses [L3 CAP: 2020-89]</option><option>NGABO David [L3 MAS: 2020-90]</option><option>UMUTONI Marie Rose [L3 RCO: 2020-91]</option><option>UMUKUNZI Bon Berger [L3 MAS: 2020-92]</option><option>NDAHIRO Cesar [L3 CAP: 2020-93]</option><option>IRAKOZE Kellen [L5 SFD: 2020-94]</option><option>MUNEZARO Vanessa [L5 MAS B: 2020-95]</option><option>CYUSA Alain Tresor [L4 SFD: 2020-96]</option><option>IRADUKUNDA Herve [L4 SFD: 2020-97]</option><option>NDAHIRO Cesor [L3 CAP: 2020-98]</option><option>UWASE NASRA [L3 RCO: 2020-99]</option><option>NYIRINKWAYA SHARIF [L3 MAS: 2020-100]</option><option>MANZI Fabrice [L3 MAS: 2020-101]</option><option>UMURINGA Rabia [L3 BUS: 2020-102]</option><option>TUMUKUNDE Naila [L3 BUS: 2020-103]</option><option>MUTIGANDA Ramadhan [L3 MAS: 2020-104]</option><option>CYIZERE Prince [L3 MAS: 2020-105]</option><option>IZERE Jovany [L3 MAS: 2020-106]</option><option>NSHIZIRUNGU Daniel [L3 MAS: 2020-107]</option><option>KAMANZI Lewis [L3 CAP: 2020-108]</option><option>UMUHIRE Naomie [L3 CAP: 2020-109]</option><option>UWAMBEREYIMFURA Yvette [L5 SFD: 2020-110]</option><option>UMUTONI Yvette [L3 RCO: 2020-111]</option><option>CYUBAHIRO Jules [L3 CAP: 2020-112]</option><option>ISHIMWE SEMALI Olivis [L3 CAP: 2020-113]</option><option>NIYOYABANJE Angella AKISA [L3 CAP: 2020-114]</option><option>NSENGIMANA Aimee Flora [L3 CAP: 2020-115]</option><option>IRADUKUNDA Arsene [L3 MAS: 2020-116]</option><option>NISHIMWE Shemusa [L3 BUS: 2020-117]</option><option>ISHIMWE David [L3 MAS: 2020-118]</option><option>UWAMARIYA Yvette [L3 BUS: 2020-119]</option><option>ISHIMWE Christostom [L3 BUS: 2020-120]</option><option>MUGWANEZA Christian [L3 BUS: 2020-121]</option><option>BUTERA Shakuru [L3 BUS: 2020-122]</option><option>TWEMBI Justin [L3 BUS: 2020-123]</option><option>NUMUGISHA Clovis [L3 BUS: 2020-124]</option><option>NUWAYO  Aime Elia Desa [L3 BUS: 2020-125]</option><option>ISHIMWE Benitha [L3 BUS: 2020-126]</option><option>UWAMURERA Alice [L3 BUS: 2020-127]</option><option>HAHIRWA Eric [L3 BUS: 2020-128]</option><option>BIHOYIKI Regine [L3 BUS: 2020-129]</option><option>TUYISENGE Pernette [L3 BUS: 2020-130]</option><option>MURANGIRA SANGWA Cedric [L3 CAP: 2020-131]</option><option>BUTWARI Junior [L3 MAS: 2020-132]</option><option>BUTWARI Junior [L3 MAS: 2020-133]</option><option>IRADUKUNDA Hosiane [L3 BUS: 2020-134]</option><option>UWIMANA Kellen [L3 BUS: 2020-135]</option><option>NIYITEGEKA Prince [L3 MAS: 2020-136]</option><option>UMWIZAWASE Nailla [L3 CAP: 2020-137]</option><option>BISABO TETA Plescia [L3 BUS: 2020-138]</option><option>NSHIMIYIMANA Samuel [L3 CAP: 2020-139]</option><option>IRAKOZE Ritha [L3 BUS: 2020-140]</option> 
</datalist>
</div>

<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">--- Select Term ---</option>
<option>1</option><option>2</option><option>3</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Acadyear:</label>
<select class="form-control" name="acadyear" required>
<option value="">--- Select year ---</option>
<option>2020</option><option>2019</option><option>All</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-screenshot"></span> Track</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal fade" id="marks_entry" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> MARKS ENTRY</h4></div>

<div class="modal-body" style='text-align:left'>

<form method="POST">
<div class="form-group">
<label for="inputdefault">Select Class </label>
<select class="form-control" name="class" id='dona_class' required>
<option value="">--Select--</option>
<option>L3 CAP</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Coursename </label>
<select class="form-control" name="course" id='dona_course' required>
<option value="">--Select--</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">--- Select Term ---</option>

<option>3</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Result Type:</label>
<select class="form-control" name="result" required>
<option value="">--- Select Result Type ---</option>
<option>Test</option><option>Re-Assessment</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="marks_load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View List</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div> 
</div>




<div class="modal fade" id="progre" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-book"></i> PROGRESSIVE REPORTS</h4></div>

<div class="modal-body" style='text-align:left'>
<div class="row">
<div class="col-md-6" style="border:0px solid black">
<form method="POST" action="pdf_progressive_report.php" target="_blank">
<div class="form-group">
<label for="inputdefault">Select Class </label>
<select class="form-control" name="class" required>
<option value="">--Select--</option>
<option>L3 CAP</option></select>
</div>

<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">--- Select ---</option>
<option>1</option><option>2</option><option>3</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Acad. Year:</label>
<select class="form-control" name="acadyear" required>
<option value="">--- Select ---</option>
<option>2020</option>
?>
</select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>
</div>
</form>


<div class="alert alert-info"> <b><font color='black'>FOR ONE STUDENT:</font></b>
<form method="POST" action="pdf_progressive_report.php?one" target="_blank"><br>

<div class="form-group">
<label for="inputdefault">Specify Student:</label>
<input type="text" class="form-control" id="shella" class="form-control" placeholder="Enter student names or reg. no" autocomplete="off" name="std" required>
</div>

<div class="form-group">
<label for="inputdefault">Term:</label>
<select class="form-control" name="term" required>
<option value="">--- Select ---</option>
<option>1</option><option>2</option><option>3</option><option>All</option>
</select>
</div>

<div class="form-group">
<label for="inputdefault">Acad. Year:</label>
<select class="form-control" name="acadyear" required>
<option value="">--- Select ---</option>
<option>2020</option><option>2019</option><option>2018</option><option>2017</option><option>2016</option></select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>

<div class="col-md-6">
<div class="alert alert-info"><b>VIEW PAST PROGRESSIVE REPORTS</b><br><br>

<div class="form-group">
<label for="inputdefault" style="color:black">Acad. Year:</label>
<select class="form-control" onchange="listPrevClasses(this.value)" required>
<option value="">--- Select ---</option>
<option>2019</option><option>2018</option><option>2017</option><option>2016</option></select>
</div>


<span id="prevclasses"></span>
</div>

</div>
</div> 
</div>
</div>
</div>
</div>



<div class="modal fade" id="average" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-pencil"></i> SET CLASSES AVERAGE</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST">
<table class="table">
<tr><th style='text-align:left'>CLASS AVERAGE</th><th style='text-align:left'>MARKS</th></tr>

<tr><td><input type='text' class='form-control' name='cls[]' value='L3 BUS' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L3 CAP' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L3 MAS' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L3 RCO' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L4 MAS A' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L4 MAS B' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L4 RCO' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L4 SFD' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L5 LSV' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L5 MAS A' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L5 MAS B' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr><tr><td><input type='text' class='form-control' name='cls[]' value='L5 SFD' readonly></td><td><input type='text' class='form-control' name='marks[]' value='' placeholder='Enter marks' style='width:120px' 
onkeypress='return isNumberKey(event)' maxlength=2></td></tr></table>
<div class="form-group">&nbsp;
<button type="submit" name="set_avg" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> Confirm</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div> 
</div>




<div class="modal fade" id="sit_pla" role="dialog">
<div class="modal-dialog modal-lg" style="width:80%">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> STUDENTS SITTING PLAN</h4></div>

<div class="modal-body" style='text-align:left'>
<div class="form-group">
Select Room:
<select class="form-control" id='sitval' onchange="dispSitting(this.value)">
<option>-- Select --</option>
<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
</select>
</div>

<div id='sitting'>

</div>
<div class="form-group">
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</div>
</div>
</div> 
</div>






<div class="modal fade" id="cards" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-list"></i> GENERATE CARDS</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_cards.php" target="_blank">

<div class="form-group">
<label for="inputdefault">Select class:</label>
<select class="form-control" name="class" required>
<option value=''>--- Select ---</option><option>L3 ACC</option><option>L3 BUS</option><option>L3 CAP</option><option>L3 LSV</option><option>L3 MAS</option><option>L3 OFM</option><option>L3 RCO</option><option>L4 LSV</option><option>L4 MAS A</option><option>L4 MAS B</option><option>L4 RCO</option><option>L4 SFD</option><option>L5 LSV</option><option>L5 MAS A</option><option>L5 MAS B</option><option>L5 RCO</option><option>L5 SFD</option></select>
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> View</button>

<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal fade" id="newfile" role="dialog">
<div class="modal-dialog modal-sm">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-plus"></i> UPLOAD A FILE</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="inputdefault">Browse File:</label>
<input type="file" name="mydoc" class="form-control" required>
</div>

<div class="form-group">
<label for="inputdefault">File Name:</label>
<input type="text" name="filename" class="form-control" placeholder="Enter file name" required>
</div>

<div class="form-group">
<label for="inputdefault">File Category:</label>
<select class="form-control" name="catego" required>
<option value="">---- Select ----</option>
<option>NOTES</option>
<option>SCHEME OF WORK</option>
<option>MARKS</option>
<option>TEST</option>
<option>EVALUATION</option>
<option>EXAM</option>
<option>INVOICE</option>
<option>TIMETABLE</option>
<option>ANNOUNCEMENT</option>
<option>OTHERS</option>
</select>
</div>

<div class="form-group">
<button type="submit" name="upload_file" class="btn btn-info">
<span class="glyphicon glyphicon-upload"></span> Upload</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>






<div class="modal fade" id="sendfile" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-file"></i> SEND A FILE</h4></div>

<div class="modal-body" style='text-align:left'>
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="inputdefault">Browse File To Send:</label>
<input type="file" name="mydoc" class="form-control" required>
</div>

<div class="form-group">
<label for="inputdefault">File Name:</label>
<input type="text" name="filename" autocomplete="off" class="form-control" placeholder="Enter file name" required>
</div>

<div class="form-group">
<label for="inputdefault">File Category:</label>
<select class="form-control" name="catego" required>
<option value="">---- Select ----</option>
<option>NOTES</option>
<option>SCHEME OF WORK</option>
<option>MARKS</option>
<option>TEST</option>
<option>EVALUATION</option>
<option>EXAM</option>
<option>INVOICE</option>
<option>TIMETABLE</option>
<option>ANNOUNCEMENT</option>
<option>OTHERS</option>
</select>
</div>


<div class="form-group">
<label for="inputdefault">To:</label>
<select class="form-control" name="receiver" required>
<option value="">--- Select staff ---</option>
<option value="All">All Staff</option>
<option value="Admin">Administration Only</option>
<option value="Teachers">Teachers Only</option>

<option value='17'>Alexis Yves DUSABIMANA [Teacher]</option><option value='27'>Brother Adrien MUSABIYINEMA [D. Director of Studies]</option><option value='1'>Brother Pie SEBAKIGA [Principal]</option><option value='12'>Chantal MUSHIMIYIMANA [Teacher]</option><option value='11'>Christian NIYOMUGABO [Teacher]</option><option value='8'>Delphine NIWEMWUNGELI [Teacher]</option><option value='9'>Emmanuel NIYONZIMA [Teacher]</option><option value='26'>Emmanuel RUZIGA [DAF]</option><option value='30'>Eric DUSHIMIMANA [Dean of Discipline]</option><option value='39'>HABIMANA Ferdinand [Patron]</option><option value='20'>Jean Claude NTIRANTA [Teacher]</option><option value='23'>Jean HATEGEKIMANA [Teacher]</option><option value='22'>Jonas KARASIRA [Teacher]</option><option value='19'>Marie Chantal DUSABUMUREMYI [Teacher]</option><option value='38'>MUGABO Andre [Teacher]</option><option value='34'>MUHUNNYI Francois [Teacher]</option><option value='32'>NIYONSENGA Bernardin [Patron]</option><option value='33'>NYAYIHA Kevin [Teacher]</option><option value='37'>NYIRAHAKORIMANA Claudette [Teacher]</option><option value='25'>Odeth MUREKATETE [Secretary]</option><option value='28'>Sandra UMUTONI [Accountant]</option><option value='36'>UWIHOREYE Beatrice [Teacher]</option></select>
</div>


<div class="form-group">
<button type="submit" name="sendfile" class="btn btn-info">
<span class="glyphicon glyphicon-ok"></span> Send</button>
<button class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
</div>
</form>
</div>
</div>
</div>
</div>






<div class="modal fade" id="view_att" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-book"></i> VIEW A2 STAFF ATTENDANCE</h4>
</div>
<div class="modal-body" style='text-align:left'>
<form method="POST" action="pdf_attendanco.php?1" target="_blank">

<table border=0>
<tr>
<td valign="top" style="border-right: 1px solid black;padding-right: 30px">
<div class="alert alert-info"><b>DAILY ATTENDANCE REPORT</b></div>

<div class="form-group">
<label for="inputdefault">Report Type</label>
<select class="form-control" name='repo' required>
<option value="">---Select---</option>
<option>All</option>
<option>Present</option>
<option>Absent</option>
<option>Late Comers</option>
</select>
</div> 

<div class="form-group">
<label for="inputdefault">Attendance Date</label>
<input type="text" class="form-control" name='date' autocomplete="off" value="2020-01-23">
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-list"></span> View Report</button>
</div>
</form>
</td>

<td valign="top" style="padding-left:50px;border-left: 1px solid black">
<div class="alert alert-info"><b>DATE INTERVAL REPORT</b></div>
<form method="POST" action="pdf_attendanco.php?2" target="_blank">

<div class="form-group">
<label for="inputdefault">From</label>
<input type="text" class="form-control" name='from' autocomplete="off" value="2020-01-16">
</div>

<div class="form-group">
<label for="inputdefault">To</label>
<input type="text" class="form-control" name='to' autocomplete="off" value="2020-01-23">
</div>

<div class="form-group">
<button type="submit" name="load" class="btn btn-info">
<span class="glyphicon glyphicon-list"></span> View Report</button>
</div>
</form>
</td>
</tr>
</table><br>

<div class="alert alert-success"><b>INDIVIDUAL ATTENDANCE REPORT</b></div>
<form method="POST">
<div class="form-group">
<label for="inputdefault">Staff</label>
<select class="form-control" name='staff' required>
<option value="">--- Select staff ---</option>
<option value='17'>Alexis Yves DUSABIMANA [Teacher]</option><option value='27'>Brother Adrien MUSABIYINEMA [D. Director of Studies]</option><option value='12'>Chantal MUSHIMIYIMANA [Teacher]</option><option value='11'>Christian NIYOMUGABO [Teacher]</option><option value='8'>Delphine NIWEMWUNGELI [Teacher]</option><option value='9'>Emmanuel NIYONZIMA [Teacher]</option><option value='30'>Eric DUSHIMIMANA [Dean of Discipline]</option><option value='39'>HABIMANA Ferdinand [Patron]</option><option value='20'>Jean Claude NTIRANTA [Teacher]</option><option value='23'>Jean HATEGEKIMANA [Teacher]</option><option value='22'>Jonas KARASIRA [Teacher]</option><option value='19'>Marie Chantal DUSABUMUREMYI [Teacher]</option><option value='38'>MUGABO Andre [Teacher]</option><option value='34'>MUHUNNYI Francois [Teacher]</option><option value='32'>NIYONSENGA Bernardin [Patron]</option><option value='33'>NYAYIHA Kevin [Teacher]</option><option value='37'>NYIRAHAKORIMANA Claudette [Teacher]</option><option value='25'>Odeth MUREKATETE [Secretary]</option><option value='28'>Sandra UMUTONI [Accountant]</option><option value='36'>UWIHOREYE Beatrice [Teacher]</option></select>
</div>

<div class="form-group">
<label for="inputdefault">From</label>
<input type="text" class="form-control" name='from' autocomplete="off" value="2020-01-16">
</div>

<div class="form-group">
<label for="inputdefault">To</label>
<input type="text" class="form-control" name='to' autocomplete="off" value="2020-01-23">
</div>

<div class="form-group">
<button type="submit" name="indi_att" class="btn btn-success">
<span class="glyphicon glyphicon-list"></span> View Report</button>

<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Close</button>
</div>
</form>
</div>

</div>
</div>
</div>










<div class="modal fade" id="attendance" role="dialog" data-backdrop="static" data-keyword="false">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header" style="background-color:white">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color:#1C94C4;font-weight:bold;text-align:left"> 
<i class="glyphicon glyphicon-ok"></i> RECORDING SMART ATTENDANCE....</h4></div>

<div class="modal-body" style='text-align:left'>
<input type="text" class="form-control" id="data" autofocus="on" placeholder="Swipe a student card...." 
onchange="autoAttendance(this.value)" onclick="autoAttendance(this.value)" onfocus="if(this.value!='') this.value='';">
</div>

<div id='content' style="border:0px solid white;padding:15px">

</div>


</div>
</div>
</div>




<script type="text/javascript" src="view/js/index_quick.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#output").modal("show"),
$("#courses_list").modal("show"),
$("#update_class_info").modal("show"),
$("#import_photos").modal("show"),
$("#import_stf_photos").modal("show"),
$("#load_std_photos").modal("show"),

$("#marks_form").modal("show"),
$("#myfiles").modal("show"),
$("#track").modal("show"),
$("#track_att").modal("show"),
$("#toabsent").modal("show"),
$("#stati_gender").modal("show"),
$("#totick").modal("show"),
$("#alvin").dynamicForm("#alvinplus", "#alvinminus", {limit:50, createColor: 'yellow',removeColor: 'red'});
$("#alvin1").dynamicForm("#alvinplus1", "#alvinminus1", {limit:50, createColor: 'yellow',removeColor: 'red'});

$('#givepermi').on('shown.bs.modal', function() {
    $("#input_permi").focus();
});

$('#reducedisp').on('shown.bs.modal', function() {
    $("#input_disp").focus();
});

$('#dispdeci').on('shown.bs.modal', function() {
    $("#input_deci").focus();
});

$('#bycards').on('shown.bs.modal', function() {
    $("#auto_reader").focus();
});

$("#sandrine").typeahead({
source:function(query,result)
{
$.ajax({
url:"autocomplete.php",
method:"POST",
data:{query:query},
dataType:"json",
success:function(data)
{
result($.map(data,function(item){
return item;
}));
}
})
}
});



$("#shella").typeahead({
source:function(query,result)
{
$.ajax({
url:"autocomplete.php",
method:"POST",
data:{query:query},
dataType:"json",
success:function(data)
{
result($.map(data,function(item){
return item;
}));
}
})
}
});



$("#nicole").typeahead({
source:function(query,result)
{
$.ajax({
url:"autocomplete.php",
method:"POST",
data:{query:query},
dataType:"json",
success:function(data)
{
result($.map(data,function(item){
return item;
}));
}
})
}
});



var spec=1;
for(spec=1;spec<=20;spec++)
{
var nami="#pridone"+spec;
$(nami).typeahead({
source:function(query,result)
{
$.ajax({
url:"autocomplete.php",
method:"POST",
data:{query:query},
dataType:"json",
success:function(data)
{
result($.map(data,function(item){
return item;
}));
}
})
}
});
}




var spec=1;
for(spec=1;spec<=10;spec++)
{
var nami="#tetema"+spec;
$(nami).typeahead({
source:function(query,result)
{
$.ajax({
url:"autocomplete.php",
method:"POST",
data:{query:query},
dataType:"json",
success:function(data)
{
result($.map(data,function(item){
return item;
}));
}
})
}
});
}

/*
setInterval(function(){
$("#damour").load('damour.php')
},100);
*/
});
</script>
</body>
</html>