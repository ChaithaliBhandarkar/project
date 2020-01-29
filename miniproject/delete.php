<?php 
    $id=$_GET['id'];
    echo $id;
    include('session.php');
    $q = "DELETE FROM registerations WHERE eventid='$id'";
    $cq=mysqli_query($conn,$q);
    $q="DELETE FROM `event` WHERE eventid='$id';";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    //$ret=mysqli_num_rows($cq);
	
	if($cq)
    {
        echo " Deleted<br>";
        echo "<a href='viewevent.php'>Back</a>";
    }
    else
    {
        echo "Cannot Deleted<br>";
        echo "<a href='viewevent.php'>Back</a>" ;  
    }
?>