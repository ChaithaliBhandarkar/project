<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#">
        Name:<input type="text" name="uname"><br><br>
        <button type="submit">Signup</button><br>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error) {
      die("Conection failed: ".$conn->connect_error);
}
echo "Connected successfully";
if($_SERVER[REQUEST_METHOD"]=="POST")
{
    
}