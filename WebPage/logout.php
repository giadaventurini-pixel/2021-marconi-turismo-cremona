<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Stai sloggando';
   header('Refresh: 0; URL = login.php');
?>