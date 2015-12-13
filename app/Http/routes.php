<?php

Route::get('/',"InterController@index");
/*Route::get('about',"InterController@about");
Route::get('services',"InterController@services");
Route::get('portfolio',"InterController@portfolio");
Route::get('blog',"InterController@blog");*/
Route::get('contact',"InterController@contact");

//Route::post('sales/add_entity','CosController@addEntity')

Route::controller('sales','CosController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
