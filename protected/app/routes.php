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

Route::get('users', 'Controller\Crud\ReadController@readUsers');

Route::get('create', 'Controller\Crud\CreateController@createUser');
Route::post('create', 'Controller\Crud\CreateController@createpostUser');

Route::get('update/{id}', 'Controller\Crud\UpdateController@updateUser');
Route::post('update/{id}', 'Controller\Crud\UpdateController@updatepostUser');

Route::get('delete/{id}', 'Controller\Crud\DeleteController@deleteUser');