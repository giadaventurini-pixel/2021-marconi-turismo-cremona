<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\POI_Page;
use \App\Models\user;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class POI extends \Core\Controller
{

    /**
     * Before filter. Return false to stop the action from executing.
     *
     * @return void
     */
    protected function before()
    {
        // ...
    }

    protected function after()
    {
        // ...
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('POI/index.html');
    }

		    public function poiAction()
    {
        View::renderTemplate('POI/museo_del_violino.html');
    }


    public function data_userAction()
    {
			echo User::getAll();
    }

		public function data_poiAction()
    {
		 	echo POI_Page::getAll();
    }
}
