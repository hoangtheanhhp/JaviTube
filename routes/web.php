<?php

Route::Auth();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'users/', 'as' => 'users.'], function() {
	Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@index']);
	Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
	Route::get('follow/{id}', ['as' => 'follow', 'uses' => 'UserController@toggleFollow']);
	Route::post('changePassword', ['as' => 'change.password', 'uses' => 'UserController@changePassword']);
});

Route::group(['prefix' => 'songs/', 'as' => 'songs.' ], function() {
    Route::post('store', ['as' => 'store', 'uses' => 'SongController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'SongController@show']);
});
