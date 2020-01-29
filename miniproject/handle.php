<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="students";
$tbl_name="details";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die (mysqli_error($conn));
$ab=$_POST['usn'];
if(isset($_POST['update']))
    {
        $nm1=$_POST['name'];
        $sm=$_POST['sem'];
        $ag=$_POST['age'];
        $ad=$_POST['addr']
        $db=$_POST['dob'];
        $nm=$_POST['usn'];
        $res2="UPDATE $tbl_name set name='$nm1',sem='$sm',age='$age',addr='$ad',dob='$db' where usn='$nm'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header('location:disp.php');
    }
?>

<?php
$ab1=$_POST['usn'];
$res1="select * from $tbl_name where usn='$abi'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result);
if($cn==false)
    {
        header("Location:dsn.php");
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $usn=$row['usn'];
            $name=$row['name'];
            $sem=$row['sem'];
            $age=$row['age'];
            $address=$row['addr'];
            $dob=$row['dob'];
        }
    }   
?>

<html>
    <head>
        <title>Edit data</title>
    </head>
    <body>
        <br/><br/>
        <form name="form1" method="post" action="handle.php">
            <table border="0">
                <tr>
                    <td>USN</td>
                    <td><input type="uniqid" name="usn" value="<?php echo $usn;?>" readonly></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><input type ="text" name="name" value="<?php echo $name;?>" readonly></td>
                </tr>
                <tr>
                    <td>SEM</td>
                    <td><input type ="text" name="sem" value="<?php echo $sem;?>" readonly></td>
                </tr>
                <tr>
                    <td>AGE</td>
                    <td><input type ="text" name="age" value="<?php echo $age;?>" readonly></td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td><input type ="text" name="address" value="<?php echo $address;?>" readonly></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type ="text" name="dob" value="<?php echo $dob;?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>