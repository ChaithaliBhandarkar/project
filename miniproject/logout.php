<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: EUPHORIAyo.html?status=logout");
      exit();
   }
?>