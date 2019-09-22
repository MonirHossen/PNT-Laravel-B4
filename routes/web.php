<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//post related route
Route::get('posts','PostController@index');
Route::get('post/create','PostController@create');
Route::post('post/store','PostController@store');
Route::get('post/edit/{id}','PostController@edit');
Route::post('post/update/{id}','PostController@update');
Route::delete('post/delete/{id}','PostController@delete');
//post related route end

//comments related route start
Route::get('comments','CommentController@index');
Route::get('comment/create','CommentController@create');
Route::post('comment/store','CommentController@store');
Route::get('comment/edit/{id}','CommentController@edit');
Route::put('comment/update/{id}','CommentController@update');
Route::delete('comment/delete/{id}','CommentController@delete');
