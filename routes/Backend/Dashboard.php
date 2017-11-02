<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
/*
* Messages Route
* Namespaces indicate folder structure
*/
Route::group(['namespace' => 'Messages', 'prefix' => 'messages'], function () {
	Route::get('/', ['as' => 'messages', 'uses' => 'MessageController@index']);
	Route::get('create', ['as' => 'messages.create', 'uses' => 'MessageController@create']);
	Route::post('/', ['as' => 'messages.store', 'uses' => 'MessageController@store']);
	Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessageController@show']);
	Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessageController@update']);

});