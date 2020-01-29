<?php
    include('session.php');
    if(isset($_POST['upload']))
    {
     $eventname=$_POST['eventname'];
     $result = mysqli_query($conn,"SELECT * FROM `registerations` r,studs s,event e WHERE e.eventid=r.eventid and s.USN=r.usn and e.name='$eventname'");
    }
    
?>
<html>
    <head>
        <title>View Registration</title>
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
    <form action="" method="post">
    <select name="eventname">
    <?php 
    $result1 = mysqli_query($conn,"SELECT * FROM event");
    while($row1 = mysqli_fetch_array($result1))
    {
         echo "<option>".$row1['name']."</option>";
    }
    ?>
    </select>
    <input type="submit" name="upload">
    </form>
    <?php 
    if(isset($result))
    {
    ?>
        <table>
            <tr>
                <th>Name</th>
                <th>USN</th>
                <th>Event Name</th>
            </tr>
            <?php
if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["NAME"]; ?></td>
    <td><?php echo $row["USN"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
</tr>
<?php
$i++;
}
}
    }
?>

        </table>
        <a href="events.php">Back</a>
    </body>
</html>