<?php
  session_start();
  unset($_SESSION["username"]);
  unset($_SESSION["subscription"]);
	unset($_SESSION["poileft"]);
   
  echo 'Stai sloggando';
  header('Refresh: 0; URL = login.php');
?>