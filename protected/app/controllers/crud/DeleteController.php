<?php namespace Controller\Crud;

use Model\User;
use \Redirect;

class DeleteController extends \BaseController 
{
	public function deleteUser($id)
	{
		$user = User::where('id', $id)->first();
		$user->delete();
		return Redirect::to('crud/users');
	}
}