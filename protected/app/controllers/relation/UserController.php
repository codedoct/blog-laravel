<?php namespace Controller\Relation;

use Model\User;
use \View;

class UserController extends \BaseController 
{
	public function getUserDetail($user_id)
	{
		$user = User::where('id', $user_id)->first();
		//code dibawah untuk panggil relasi dari model user
		if($user){
			$address = $user->addresses;
			$role = $user->role;
			$company = $user->company;
		}
		return View::make('web.relation.show-user-detail')->with('user', $user);
	}
}
