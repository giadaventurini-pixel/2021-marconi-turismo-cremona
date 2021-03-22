<?php

namespace App\Models;

use \stdClass;


/**
 * Example user model
 *
 * PHP version 7.0
 */
class POI_Page extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
			//POIS
	$json = new stdClass();
	$json->nome_poi = "MUSEO DEL VIOLINO";
	$json->foto_mappa = '<img class="fotomappa" src="img/mappa.png" alt="mappa">';
	$json->info_poi = array("<li><p>Piazza Guglielmo Marconi, 5, 26100</p></li>",'<li><p class = "orario">Ora aperto</p></li>',"<li><p>Fondazione: 1893</p></li>");
	$json->foto_museo_fuori = '<img class="foto_museo_sx" src="img/museo_da_fuori.jpg" alt="Museo da fuori">';
	$json->descrizione_poi = '<p class="p_descrizione">Il Museo del Violino è un museo musicale situato a Cremona. Il museo è noto soprattutto per la sua collezione di strumenti ad arco che comprende anche violini, viole, violoncelli e contrabbassi di rinomati liutai, tra cui Antonio Stradivari e Giuseppe Guarneri del Gesù.</p>';
	$json->foto_museo_dentro = '<img class="foto_museo_sx" src="img/museo_interno.jpg" alt="Museo interno">';
	$json->video_yt = '<iframe class="video_museo" width="270" height="145" src="https://www.youtube.com/embed/5jPuiHlLZdg" frameborder="0" allowfullscreen></iframe>';

        return  json_encode($json);
    }
}
?>
