<?php

/*-----------WEB-----------*/
Route::get('/', 'HomeController@showWelcome');

//pahamilah group route dibawah
Route::group(array('prefix' => 'crud'), function(){
	Route::get('users', 'Controller\Crud\ReadController@readUsers');

	Route::get('create', 'Controller\Crud\CreateController@createUser');
	Route::post('create', 'Controller\Crud\CreateController@createpostUser');

	Route::get('update/{id}', 'Controller\Crud\UpdateController@updateUser');
	Route::post('update/{id}', 'Controller\Crud\UpdateController@updatepostUser');

	Route::get('delete/{id}', 'Controller\Crud\DeleteController@deleteUser');
});