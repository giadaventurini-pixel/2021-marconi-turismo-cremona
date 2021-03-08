<?php
   $json = new stdClass();
	 $json->username = "Mario Verdi";
	 $json->poi_left_number = 6;
	 $json->subscription = "Argento";
	 $json->poi_list = array("<li>Museo Del Violino</li>","<li>Loggia dei Militi</li>","<li>Museo Archeologico</li>", "<li>Museo della Civiltà Contadina</li>", "<li>Museo Verticale</li>", "<li>Museo Civico</li>");
	 echo json_encode($json);
?>