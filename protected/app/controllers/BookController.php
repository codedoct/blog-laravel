<?php namespace Controller;

use \View;

Class BookController Extends \BaseController
{
	Public function Index()
	{
		return View::make('book');
	}
}