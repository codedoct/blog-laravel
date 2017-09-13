<?php namespace Controller\Api;

use Model\User;
use \Response;
use \Validator;
use \Input;
use Illuminate\Http\Request;


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
				"username"				=> "required|unique:users,username",
				"email"					=> "required|email|unique:users,email",
	    		"password"              => "required|min:6",
			)
		);
		// dd($_POST);
		if ($validator->passes()) {
	    	$user = User::storeOrUpdateUser(Input::all(), null);
		    // dd($_POST);
	    	$response['status'] = 'OK';
    		$response['result'] = $user;
	    }
	    else {
    		$response['status'] = 'ERROR';
    		$response['message'] = $validator->messages();
	    }

		return Response::json($response);
	}

	public function showUser($id)
	{
		$user = User::find($id);

		if ($user) {
			$response['status'] = 'OK';
			$response['result'] = $user;
		} else {
			$response['status'] = 'ERROR';
			$response['message'] = 'User not found';
		}

		return Response::json($response);
	}

	public function updateUser($id)
	{
		$validator = Validator::make(
			Input::all(),
			array(
				"name"					=> "required",
				"username"				=> "required|unique:users,username,".$id,
				"email"					=> "required|email|unique:users,email,".$id,
	    		"password"              => "required|min:6",
			)
		);

		$user = User::find($id); 
		if ($user) {
			if ($validator->passes()) {
		    	$user = User::storeOrUpdateUser(Input::all(), $user);
		    	$response['status'] = 'OK';
	    		$response['result'] = $user;
		    }
		    else {
	    		$response['status'] = 'ERROR';
	    		$response['message'] = $validator->messages();
		    }
		} else {
			$response['status'] = 'ERROR';
    		$response['message'] = 'User not found';
		}

		return Response::json($response);
	}

	public function deleteUser($id)
	{
		$user = User::find($id);
		if ($user) {
			$user->delete();
			$response['status'] = 'OK';
			$response['result'] = 'Success delete user';
		} else {
			$response['status'] = 'ERROR';
			$response['message'] = 'User not found';
		}

		return Response::json($response);
	}
}