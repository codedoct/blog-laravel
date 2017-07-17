<?php namespace Controller\Api;

use Model\User;
use \View;
use \Response;

class ReadController extends \BaseController 
{
	public function readUsers()
	{
		$users = User::get();

		$response['status'] = 'OK';
		$response['result'] = $users;

		return Response::json($response);
	}

}