<?php namespace Controller\Auth;

use Model\User;
use \Input;
use \View;
use \Validator;
use \Redirect;
use \Auth;
use \Session;

class AuthController extends \BaseController
{
	public function indexLogin()
	{
		return View::make('auth.login');
	}

	public function login() 
	{
		$user = NULL;
		// Check whether input is an email or username
		$field = Validator::make(
					array('email' => Input::get('username', '')),
					array('email' => 'email'))
					->passes() ? 'email' : 'username';
		$credentials = array(
			$field 		=> Input::get('email'), 
			'password'  => Input::get('password', '')
		);

		$remember = Input::get('remember', '1') == '1' ? true : false;

		$status = INVALID_CREDENTIAL;

		if(Auth::attempt($credentials, $remember)) {
			$user = Auth::user();
			$status = OK;
		}

		// For Logging
		Session::put(SESSION_LOG_STATUS, $status);
		Session::put(SESSION_LOG_TYPE, LOGGING_UPDATE);
		Session::put(SESSION_LOG_MODEL, $user);
		// dd($user);
		return Redirect::to('');
	}

	public function logout() 
	{
		$status = INVALID_CREDENTIAL;
		$user = Auth::user();

		if(!$user) {
			return Redirect::to('login');
		} else {
			$status = OK;
			$user = Auth::logout();
		}

		// For Logging
		Session::put(SESSION_LOG_TYPE, LOGGING_UPDATE);
		Session::put(SESSION_LOG_STATUS, $status);
		Session::put(SESSION_LOG_MODEL, $user);

		return Redirect::to('');
	}
}