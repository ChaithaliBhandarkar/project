<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="studs";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT*FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	if($_POST['nm']=='' || $_POST['sn']=='' || $_POST['sem']=='' || $_POST['mail']=='' || $_POST['un']=='' || $_POST['pwd']=='')
	{
		echo "<script>alert('Few inputs are not filled')</script>";
	}
	else
	{
	$usn=$_POST['nm'];
	$name=$_POST['sn'];
	$sem=$_POST['sem'];
	$age=$_POST['mail'];
	$addr=$_POST['un'];
	$dob=$_POST['pwd'];
	$q="SELECT usn FROM studs WHERE usn='$usn'";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>Kindly enter all the fields below!</h2></center>";
	}
	else
	{
		$query="INSERT INTO studs VALUES('$usn','$name','$sem','$age','$addr','$dob')";
		mysqli_query($conn,$query)or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
		header("Location:firstpage.html");				
	}
	}
}
Mysqli_close($conn);
?>
<html>
<head>
<meta charset="UTF-8">
<body style ="background-color:#E5E5E5">
<title>registration form</title>

    
</head>
<h1 align="CENTER">Registration form</h2>
<form action=""method="post">
<table border="0"align="center">
<tbody>
<tr>
<td><label for="name">NAME:</label></td>
<td><input id="name" maxlength="50" name="nm" type="text"/></td>
</tr>
<tr>
<td><label for="id">UNIVERSITY SEAT NUMBER:</label></td>
<td><input id="id" maxlength="50" name="sn" type="text"/></td>
</tr>
<tr>
<td><label for="sem">SEMESTER:</label></td>
<td><input id="sem" maxlength="50" name="sem" type="number_format"/></td>
</tr>
<tr>
<td><label for="mail">MAIL:</label></td>
<td><input id="mail"maxlength="50" name="mail" type="text"/></td>
</tr>
<tr>
<td><label for="un">USERNAME:</label></td>
<td><input id="un"maxlength="90" name="un" type="text"/></td>
</tr>
<tr>
<td><label for="pwd">PASSWORD:</label></td>
<td><input id="pwd" maxlength="50" name="pwd" type="password"/> </td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Submit"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>











		