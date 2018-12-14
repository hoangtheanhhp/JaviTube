<?php

Route::get('/', 'HomeController@index')->name('home');

Route::Auth();

Route::group(['middleware' => 'auth'], function() {
    Route::post('comments/store', ['as' => 'comments.store', 'uses' => 'CommentController@store']);
});

Route::group(['prefix' => 'users/', 'as' => 'users.' , 'middleware' => 'auth'], function() {
	Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@index']);
	Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
	Route::get('follow/{id}', ['as' => 'follow', 'uses' => 'UserController@toggleFollow']);
	Route::post('changePassword', ['as' => 'change.password', 'uses' => 'UserController@changePassword']);
});
Route::get('/search',['as'=>'search', 'uses' => 'SearchController@index']);
Route::group(['prefix' => 'singers/', 'as' => 'singer.'], function() {
    Route::get('{id}', ['as' => 'index', 'uses' => 'SingerController@index']);
    Route::get('{id}/like', ['as' => 'like', 'uses' => 'SingerController@like']);
    Route::get('{id}/unlike', ['as' => 'unlike', 'uses' => 'SingerController@unlike']);
});
Route::group(['prefix' => 'songs/', 'as' => 'songs.'], function() {
    Route::post('store', ['as' => 'store', 'uses' => 'SongController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'SongController@show']);
    Route::get('{id}/like', ['as' => 'like', 'uses' => 'SongController@like']);
    Route::get('{id}/unlike', ['as' => 'unlike', 'uses' => 'SongController@unlike']);
    Route::get('{id}/liked', ['as' => 'liked', 'uses' => 'SongController@liked']);    
    Route::get('{id}/like_num', ['as' => 'like_num', 'uses' => 'SongController@like_num']);    
});
Route::group(['prefix' => 'admin/','as' =>'admin.','middleware'=>'admin'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'Admin\UserController@index']);
    Route::group(['prefix' => 'report/','as' => '.report'], function () {
        Route::get('/',['as' => 'index', 'uses' => 'ReportController@index']);
        Route::get('{id}', ['as' => 'show', 'uses' => 'ReportController@show']);
        Route::post('{id}/remove', ['as' => 'remove', 'uses' => 'ReportController@remove']);
    });
    Route::get('song', ['as' => 'song', 'uses' => 'Admin\SongController@index']);
    Route::delete('song/{id}', ['as' => 'songDelete', 'uses' => 'Admin\SongController@destroy']);

    Route::get('users', ['as' => 'user', 'uses' => 'Admin\UserController@index']);
    Route::delete('users/{id}', ['as' => 'user.delete', 'uses' => 'Admin\UserController@destroy']);
    Route::patch('users/{id}', ['as' => 'user.admin', 'uses' => 'Admin\UserController@toAdmin']);

    Route::group(['prefix' => 'singers', 'as' => 'singers.'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\SingerController@index']);
        Route::delete('/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\SingerController@destroy']);
        Route::post('/store', ['as' => 'store', 'uses' => 'Admin\SingerController@store']);
    });
});
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
Route::get('messager', 'ChatsController@index');

