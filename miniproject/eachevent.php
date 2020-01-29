<?php
include('session.php');
echo $login_session;
$event=$_GET['id'];
$q1="select * from studs where USERNAME='$login_session'";
$res1 = mysqli_query($conn, $q1);
$row = mysqli_fetch_array($res1);
$usn=$row['USN'];
$query="insert into registerations(usn,eventid) values ('$usn','$event' )";
$res = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
			</head>
			 <div class="button">

		   <title>link</title>
		   <body>
		   <h1>You have registered successfully </h1>
		   </div>
		   </body>
		   
		   </html>
		   
		   
		   
		   
		   
     