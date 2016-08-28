<?php namespace Controller\Crud;

use Model\User;
use \Input;
use \View;
use \Validator;
use \Hash;
use \Redirect;

class CreateController extends \BaseController 
{
	public function createUser()
	{
		return View::make('web.createUser');
	}

	public function createpostUser()
	{
		//var_dump($_POST);
		$validator = Validator::make(
			Input::all(),
			array(
				"name"					=> "required",
				"username"				=> "required",
				"email"					=> "required|email|unique:users,email",
	    		"password"              => "required|min:6",
			)
		);
		// dd($_POST);
		if ($validator->passes()) {
	    	$user = new User;
			$user->name     = Input::get('name');
			$user->username = Input::get('username');
			$user->email    = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		    // dd($_POST);
	    	return Redirect::to('crud/users');
	    }
	    else {
	    	return Redirect::to('crud/create')
	    		->withErrors($validator)
	    		->withInput();
	    }
	}
}