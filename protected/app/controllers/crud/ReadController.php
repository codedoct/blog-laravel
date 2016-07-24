<?php namespace Controller\Crud;

use Model\User;
use \View;

class ReadController extends \BaseController 
{
	public function readUsers()
	{
		$users = User::all();
		return View::make('web.readUser')->with('data_user', $users);
	}

}
