<?php

include('session.php');
echo $login_session;
if(isset($_POST['Submit']))
{
	$club=$_POST['club'];	
	$q="insert into register values ('$login_session','$club')";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	
	if($ret==true)
	{
		echo"<center><h2 style='color:green'>USN already exists or fill all the fields!</h2></center>";
	}
	else
	{
	
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
		header("Location:success.php");
	}
}
Mysqli_close($conn);
?>
<html>
<head>
<body style ="background-color:#E5E5E5">
<title>registration form</title>
</head>
<h1 ALIGN="CENTER">Registration form</h2>
<form action="" method="post">
<table border="0"align="center">
<tbody>
<tr>
<td><label for="name">CLUB:</label></td>
<td><select name="club">
	<option>Music</option>
	<option>Dance</option>
	<option>Arts</option>
	<option>Speakers</option>
	<option>Literally Literary Club</option>
	<option>Photography</option>
	<option>Drama</option>
	</select>
</td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Submit"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>
