<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select USERNAME from studs where USERNAME = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USERNAME'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:EuphoriaYo.html");
      die();
   }
?>