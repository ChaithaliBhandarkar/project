<?php
    include('session.php');
    $result = mysqli_query($conn,"SELECT * FROM event");
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="yo2.css">
    <ul>       		
            <a href="basic.php">GALLERY</a></li> 
            <li> <a href="event.php">EVENTS</a></li>  
            <li> <a href="logout.php">LOGOUT</a></li> 
            
        </ul>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>View Event</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="table.scss">
        <table border="1">
            <tr>
                
                <th>Club</th>
                <th>Venue</th>
                <th>Time</th>
                <th>Event Name</th>
                <th>Date</th>
            </tr>
</body>
</html>
            <?php
if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<tbody>    
<tr>
    <td>&nbsp;<?php echo $row["club"];?></td>
    <td>&nbsp;<?php echo $row["venue"]; ?></td>
    <td>&nbsp;<?php echo $row["time"]; ?></td>
    <td>&nbsp;<?php echo $row["name"]; ?></td>
    <td>&nbsp;<?php echo $row["date"]; ?></td>
	<td><a href='eachevent.php?id=<?php echo $row["eventid"];?>'  > Register </a></td>	
</tr>
</tbody>
</body>
</html>
<?php
$i++;
}
}
?>

        </table>
        <a href="firstpage.html">Back</a>
    </body>
</html>