<?php 

//////////
// CRUD //
//////////
//pahamilah group route dibawah
Route::group(array('prefix' => 'crud'), function(){
	Route::get('users', 'Controller\Api\UserController@getUsers');
	Route::post('store-user', 'Controller\Api\UserController@storeUser');
});