
<html>
<head>
    <title>Add Event</title>
</head>
<body>
    <h1 align="center">Add Event</h1>
    <?php
    include('session.php');
$id=$_GET['id'];
$q="select * from event where eventid='$id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);
$id=$row['eventid'];
$club=$row['club'];
$name=$row['name'];
$venue=$row['venue'];
$date=$row['date'];
$time=$row['time'];

?>

    <form method="POST" action="">
        <table align="center">
            <tr>
                <td>Event Name</td>
                <td>: <input type="text" name="name" value="<?php echo $name ?>"/></td>
            </tr>
            <tr>
                <td>Venue</td>
                <td>: <input type="text" name="venue" value="<?php echo $venue ?>"/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>: <input type="date" name="date" value="<?php echo $date ?>"/></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>: <input type="time" name="time" value="<?php echo $time ?>"/></td>
            </tr>
            <tr>
                <td>Club</td>
                <td>: <select name="club">
	<option>Music</option>
	<option>Dance</option>
	<option>Arts</option>
	<option>Speakers</option>
	<option>Literally Literary Club</option>
	<option>Photography</option>
	<option>Drama</option>
	</select></td>
            </tr>
            <tr>
                <td align="center"><br><br><button type="submit" name="Submit">Submit</button></td>
                <td><a href="events.php">Back</a></td>
                
            </tr>
        </table>
        
          
        
        
            
    </form>
</body>
</html>

<?php




if(isset($_POST['Submit']))
{
    $club=$_POST['club'];	
    $name=$_POST['name'];    
    $venue=$_POST['venue'];	
    $date=$_POST['date'];
    $time=$_POST['time'];	
    $q="update event set `club`='$club', `name`='$name', `venue`='$venue', `time`='$time', `date`='$date' where eventid=$id;";
	$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	
	if($ret==true)
	{
        echo "Done";
        header("Location:event.php");
	}
	else
	{
	
		echo"<center><h2 style='color:green'>Details saved!</h2></center>";
		header("Location:viewevent.php");
	}
}
Mysqli_close($conn);
?>