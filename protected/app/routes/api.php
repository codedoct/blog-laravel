<?php 

//////////
// CRUD //
//////////
//pahamilah group route dibawah
Route::group(array('prefix' => 'crud'), function(){
	Route::get('users', 'Controller\Api\ReadController@readUsers');
});