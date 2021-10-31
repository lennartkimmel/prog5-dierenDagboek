<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Get('/denied', 'DeniedController@index')->name('denied');

Route::post('like/{post}', 'LikesController@store');

Route::get('/profiles', 'ProfilesController@index')->name('profiles.index');
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profiles.update');
Route::delete('/profiles/{user}', 'ProfilesController@destroy');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');

Route::get('/post', 'PostsController@index')->name('posts.index');
Route::post('/post/filtered', 'PostsController@filter')->name('posts.filtered');
Route::get('post/searched', 'PostsController@search')->name('posts.searched');
Route::get('/post/create', 'PostsController@create')->name('posts.create'); 
Route::post('/post', 'PostsController@store'); 
Route::get('/post/{post}', 'PostsController@show'); 


