<?php
   include_once "connect.php";
   session_destroy();
   echo "<script>window.open('login.php','_self')</script>";
?>