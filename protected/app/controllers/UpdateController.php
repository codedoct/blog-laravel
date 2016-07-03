<?php

class UpdateController extends BaseController
{
	public function updateUser($id)
	{
		$users = User::where('id', $id)->first();
		//dd($users);
		return View::make('web.updateUser')->with('data_user', $users);
	}

	public function updatepostUser($id)
	{
		//var_dump($_POST);
		$validator = Validator::make(
			Input::all(),
			array(
				"name"					=> "required",
				"username"				=> "required",
				"email"					=> "required|email|unique:users,email",
			)
		);
		if ($validator->passes()) {
	    	$user = User::find($id);
			$user->name     = Input::get('name');
			$user->username = Input::get('username');
			$user->email    = Input::get('email');
		    $user->save();

	    	return Redirect::to('users');
	    }
	    else {
	    	return Redirect::to('update/'.$id)
	    		->withErrors($validator)
	    		->withInput();
	    }
	}
}