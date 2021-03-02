<?php
   ob_start();
   session_start();
?>

<?
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Index Cremona</title>
		 <link href="styleIndex.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<?php
		if ($_SESSION['valid'] != true)
		{
				header('Refresh: 0; URL = login.php');
		}
	?>
	<p>Benvenuto <?php echo $_SESSION['username'] ?></p>
	<p>Pacchetto <?php echo $_SESSION['subscription'] ?></p>
	<p class = "p_center"> POI rimanenti: <?php echo $_SESSION['poileft'] ?> </p>
		<ul>
 		  <li>Museo Del Violino</li>
  		<li>Museo della Civilta' Contadina</li>
  		<li>Museo Civico</li>
  		<li>Loggia dei Militi</li>
		</ul>
	<p class = "p_center"><button class = "navbtn" type = "submit" name = "navigation">NAVIGATION</button></p>
	<p><a href = "logout.php" tite = "Logout">Logout.</p>
	</body>
</html>