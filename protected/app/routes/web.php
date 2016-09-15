<?php

/*-----------WEB-----------*/
Route::get('/', 'HomeController@showWelcome');


//////////
// CRUD //
//////////
//pahamilah group route dibawah
Route::group(array('prefix' => 'crud'), function(){
	Route::get('users', 'Controller\Crud\ReadController@readUsers');

	Route::get('create', 'Controller\Crud\CreateController@createUser');
	Route::post('create', 'Controller\Crud\CreateController@createpostUser');

	Route::get('update/{id}', 'Controller\Crud\UpdateController@updateUser');
	Route::post('update/{id}', 'Controller\Crud\UpdateController@updatepostUser');

	Route::get('delete/{id}', 'Controller\Crud\DeleteController@deleteUser');
});

/////////////////
// java script //
/////////////////
Route::group(array('prefix' => 'javaScript'), function(){
	Route::get('js1', 'Controller\belajar_js\Js1Controller@Index');
	Route::get('js2', 'Controller\belajar_js\Js2Controller@Index');
	Route::get('js3', 'Controller\belajar_js\Js3Controller@Index');
	Route::get('js4', 'Controller\belajar_js\Js4Controller@Index');
	Route::get('js5', 'Controller\belajar_js\Js5Controller@Index');
});

//////////
// BOOK //
//////////
Route::get('book', 'Controller\BookController@Index');