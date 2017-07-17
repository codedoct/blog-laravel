<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//--------------------------WEB---------------------------
Route::group(array('prefix' => ''), function() 
{
	require app_path().'/routes/web.php';
});

Route::group(array('prefix' => 'api'), function() 
{
	require app_path().'/routes/api.php';
});