<?php

Route::get('/', 'HomeController@index')->name('home');

Route::Auth();
Route::group(['prefix' => 'users/', 'as' => 'users.' , 'middleware' => 'auth'], function() {
	Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@index']);
	Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
	Route::get('follow/{id}', ['as' => 'follow', 'uses' => 'UserController@toggleFollow']);
	Route::post('changePassword', ['as' => 'change.password', 'uses' => 'UserController@changePassword']);
});

Route::group(['prefix' => 'songs/', 'as' => 'songs.'], function() {
    Route::post('store', ['as' => 'store', 'uses' => 'SongController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'SongController@show']);
    Route::get('{id}/like', ['as' => 'like', 'uses' => 'SongController@like']);
    Route::get('{id}/unlike', ['as' => 'like', 'uses' => 'SongController@unlike']);
});
Route::group(['prefix' => 'admin/','as' =>'.admin','middleware'=>'admin'], function () {
    Route::group(['prefix' => 'report/','as' => '.report'], function () {
        Route::get('/',['as' => 'index', 'uses' => 'ReportController@index']);
        Route::get('{id}', ['as' => 'show', 'uses' => 'ReportController@show']);
        Route::post('{id}/remove', ['as' => 'remove', 'uses' => 'ReportController@remove']);
    });
    Route::get('song', ['as' => 'song', 'uses' => 'Admin\SongController@index']);
    Route::delete('song/{id}', ['as' => 'songDelete', 'uses' => 'Admin\SongController@destroy']);

    Route::get('users', ['as' => 'user', 'uses' => 'Admin\UserController@index']);
    Route::delete('users/{id}', ['as' => 'user', 'uses' => 'Admin\UserController@destroy']);
    Route::patch('users/{id}', ['as' => 'user', 'uses' => 'Admin\UserController@edit']);

    Route::get('singer', ['as' => 'singer', 'uses' => 'Admin\SingerController@index']);
    Route::delete('singer/{id}', ['as' => 'Singer', 'uses' => 'Admin\SingerController@destroy']);
    Route::post('singer/new', ['as' => 'Singer', 'uses' => 'Admin\SingerController@create']);
    
});
