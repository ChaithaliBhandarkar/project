<?php

include('session.php');
echo $login_session;
if(isset($_POST['Submit']))
{
    if($_POST['name']=='' || $_POST['venue']=='')
    {
        echo "<script>alert('Few inputs are not filled')</script>";
        
    }
    else
    {
        $club=$_POST['club'];	
        $name=$_POST['name'];    
        $venue=$_POST['venue'];	
        $date=$_POST['date'];
        $time=$_POST['time'];
            
        $eventid = rand ( 10000 , 99999);
        $q="INSERT INTO `event` (`eventid`,`club`, `name`, `venue`, `time`, `date`) VALUES ('$eventid','$club', '$name', '$venue', '$time', '$date');";
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
   
}
Mysqli_close($conn);
?>
<html>
<head>
    <title>Add Event</title>
</head>
<body>
    <h1 align="center">Add Event</h1>
    <form method="POST" action="">
        <table align="center">
            <tr>
                <td>Event Name</td>
                <td>: <input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Venue</td>
                <td>: <input type="text" name="venue"/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>: <input type="date" name="date"/></td>
            </tr>
            <tr>
                <td>Time</td>
                <td>: <input type="time" name="time"/></td>
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