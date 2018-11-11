<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'users/', 'as' => 'users.'], function() {
	Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@index']);
	Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
});

Route::group(['prefix' => 'songs/', 'as' => 'songs.' ], function() {
    Route::post('store', ['as' => 'store', 'uses' => 'SongController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'SongController@show']);
});
