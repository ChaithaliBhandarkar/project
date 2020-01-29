<?php
$servername="localhost";
$username="root";
$password="";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error) {
      die("Conection failed: ". $conn->connect_error);
}
echo "Connected successfully";
?>