<?php
   session_start();
   //include('index.php')
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>