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
		header('Refresh: 0; URL = museo_del_violino.html');
	}
?>

<?php
	$json = new stdClass();
	$json->nome_poi = "MUSEO DEL VIOLINO";
	$json->foto_mappa = '<img class="fotomappa" src="./Image/mappa.png" alt="mappa">';
	$json->info_poi = array("<li><p>Piazza Guglielmo Marconi, 5, 26100</p></li>",'<li><p class = "orario">Ora aperto</p></li>',"<li><p>Fondazione: 1893</p></li>");
	$json->foto_museo_fuori = '<img class="foto_museo_sx" src="./Image/museo_da_fuori.jpg" alt="Museo da fuori">';
	$json->descrizione_poi = '<p class="p_descrizione">Il Museo del Violino è un museo musicale situato a Cremona. Il museo è noto soprattutto per la sua collezione di strumenti ad arco che comprende anche violini, viole, violoncelli e contrabbassi di rinomati liutai, tra cui Antonio Stradivari e Giuseppe Guarneri del Gesù.</p>';
	$json->foto_museo_dentro = '<img class="foto_museo_sx" src="./Image/museo_interno.jpg" alt="Museo interno">';
	$json->video_yt = '<iframe class="video_museo" width="270" height="145" src="https://www.youtube.com/embed/5jPuiHlLZdg" frameborder="0" allowfullscreen></iframe>';

	echo json_encode($json);
?>