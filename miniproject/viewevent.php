<?php
    include('session.php');
    $result = mysqli_query($conn,"SELECT * FROM event");
?>
<html>
    <head>
        <title>View Event</title>
        <link rel="stylesheet" type="text/css" href="viewevents.css">
    
        <style>
        th{
            border: 3px solid black;
        }
        td{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Club</th>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Time</th>
                <th>Date</th>
            </tr>
            <?php
if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["club"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["venue"]; ?></td>
    <td><?php echo $row["time"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><a href='delete.php?id=<?php echo $row["eventid"];?>' > Delete </a></td>
    <td><a href="update.php?id=<?php echo $row["eventid"];?>">Update</a></td>
</tr>
<?php
$i++;
}
}
?>

        </table>
        <a href="events.php">Back</a>
    </body>
</html>