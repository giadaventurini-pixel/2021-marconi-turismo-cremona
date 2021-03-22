<?php

namespace App\Models;

use \stdClass;


/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
			//USERS
      /**  $json = new stdClass();

        $json->users = array(
         new StdClass()
        );
				$json->users[0]->username = "Mario Verdi";
				$json->users[0]->poi_left_number = 6;
				$json->users[0]->subscription = "Argento";
				$json->users[0]->poi_list = array("<li><a href='museo_del_violino.html'>Museo Del Violino</li>","<li>Loggia dei Militi</li>","<li>Museo Archeologico</li>", "<li>Museo della Civiltà Contadina</li>", "<li>Museo Verticale</li>", "<li>Museo Civico</li>");
        return  json_encode($json);
				*/
	$json = new stdClass();
	$json->username = "Mario Verdi";
	$json->poi_left_number = 6;
	$json->subscription = "Argento";
	$json->poi_list = array("<li><a href='/poi'>Museo Del Violino</li>","<li>Loggia dei Militi</li>","<li>Museo Archeologico</li>", "<li>Museo della Civiltà Contadina</li>", "<li>Museo Verticale</li>", "<li>Museo Civico</li>");
		return json_encode($json);
    }
}
?>
