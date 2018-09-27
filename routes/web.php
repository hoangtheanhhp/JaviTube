<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/user/{id}', ['as' => 'index', 'uses' => 'UserController@index']);
Route::get('/redirect/{social}', ['as' => 'redirect', 'uses' => 'SocialAuthController@redirect']);
Route::get('/callback/{social}', ['as' => 'callback', 'uses' => 'SocialAuthController@callback']);

Route::group(['prefix' => 'songs/', 'as' => 'songs.' ], function() {
    Route::post('store', ['as' => 'store', 'uses' => 'SongController@store']);
    Route::get('{id}', ['as' => 'show', 'uses' => 'SongController@show']);
});
