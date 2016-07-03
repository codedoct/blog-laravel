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

Route::get('/', 'HomeController@showWelcome');

Route::get('users', 'ReadController@readUsers');

Route::get('create', 'CreateController@createUser');
Route::post('create', 'CreateController@createpostUser');

Route::get('update/{id}', 'UpdateController@updateUser');
Route::post('update/{id}', 'UpdateController@updatepostUser');

Route::get('delete/{id}', 'DeleteController@deleteUser');