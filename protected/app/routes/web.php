<?php

/*-----------WEB-----------*/
Route::get('/', 'HomeController@showWelcome');

//login
Route::get('login', 'Controller\Auth\AuthController@indexLogin');
Route::post('login', 'Controller\Auth\AuthController@login');
Route::get('logout', 'Controller\Auth\AuthController@logout');

//Localization
Route::get('lang/{lang}', function($lang)
{
	Session::put('lang', $lang);
    return Redirect::back();
});

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
	Route::group(array('prefix' => 'js6'), function(){
		Route::get('', 'Controller\belajar_js\Js6Controller@Index');
		Route::post('', 'Controller\belajar_js\Js6Controller@addTestAjax');
	});
	Route::group(array('prefix' => 'js7'), function(){
		Route::get('', 'Controller\belajar_js\Js7Controller@Index');
		Route::post('', 'Controller\belajar_js\Js7Controller@update');
	});
});

//////////
// BOOK //
//////////
Route::get('book', 'Controller\BookController@Index');