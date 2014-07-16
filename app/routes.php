<?php



Route::get('/', ['as' =>'home', 'uses' => 'PostsController@index']);

Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{slug}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::get('/draft/{slug}', ['as' => 'draft', 'uses'=>'PostsController@draft']);