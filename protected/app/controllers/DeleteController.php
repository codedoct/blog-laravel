<?php

class DeleteController extends BaseController 
{
	public function deleteUser($id)
	{
		$user = User::where('id', $id)->first();
		$user->delete();
		return Redirect::to('users');
	}
}