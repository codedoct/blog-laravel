<?php namespace Controller\belajar_js;

use \View;
use Model\User;

Class Js2Controller Extends \BaseController
{
	public function Index()
	{
		$users = User::all();

		$content['users'] = $users;

		return View::make('web/java-script2')
					->with('content', $content);
	}
}