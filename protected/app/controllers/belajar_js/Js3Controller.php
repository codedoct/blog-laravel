<?php namespace Controller\belajar_js;

use \View;
use Model\User;

Class Js3Controller Extends \BaseController
{
	public function Index()
	{
		return View::make('web/java-script3');
	}
}