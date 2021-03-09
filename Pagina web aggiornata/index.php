<?php
	ob_start();
  session_start();
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

	if ($_SESSION['valid'] != true)
	{
		header('Refresh: 0; URL = login.php');
	}
	else
	{
		header('Refresh: 0; URL = index.html');
	}
?>

<?php
	$json = new stdClass();
	$json->username = "Mario Verdi";
	$json->poi_left_number = 6;
	$json->subscription = "Argento";
	$json->poi_list = array("<li><a href='museo_del_violino.html'>Museo Del Violino</li>","<li>Loggia dei Militi</li>","<li>Museo Archeologico</li>", "<li>Museo della Civiltà Contadina</li>", "<li>Museo Verticale</li>", "<li>Museo Civico</li>");
	echo json_encode($json);
?>