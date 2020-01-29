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
	$usrnm=$_POST['myusername'];
	$pswd=$_POST['mypassword'];
	$ab="SELECT * FROM admin WHERE username='$usrnm' and password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{	$_SESSION['login_user'] = $usrnm;
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