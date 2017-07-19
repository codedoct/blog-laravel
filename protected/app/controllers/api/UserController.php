<?php namespace Controller\Api;

use Model\User;
use \Response;
use \Validator;
use \Input;


class UserController extends \BaseController 
{
	public function getUsers()
	{
		$users = User::get();

		$response['status'] = 'OK';
		$response['result'] = $users;

		return Response::json($response);
	}

	public function storeUser()
	{
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
	    	$user = User::storeUser(Input::all());
		    // dd($_POST);
	    	$response['status'] = 'OK';
    		$response['result'] = $user;
			return Response::json($response);
	    }
	    else {
    		$response['status'] = 'ERROR';
    		$response['message'] = $validator->messages();
			return Response::json($response);
	    }
	}

}