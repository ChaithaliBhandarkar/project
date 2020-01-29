<html>
<head> 
<style>
body {
    background-image:url("euphoria.PNG");
    height=100%;
    background-color:#cccccc;
    background-size:cover;
}


    </style>
</head>
<table width="300"border="0"align="center"cellpadding="0"cellspacing"1"bgcolor="#CCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%"border="0"cellpadding="3"cellspacing="1" bgcolor="#FFFFF">
<tr><td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password"id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit"value="Login"></td>

</tr>
</table>
</td></form></tr></table></html>
<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="studs";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['myusername'])&& isset($_POST['mypassword']))
{
	$name=$_POST['sn'];
	$dob=$_POST['pwd'];
	$ab="SELECT * FROM studs WHERE username='$name' and password='$dob'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{	$_SESSION['login_user'] = $name;
		echo"<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
		header("Location:events.php");
	}
	else
	{
				echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";

		
	}
}
ob_end_flush();
?>