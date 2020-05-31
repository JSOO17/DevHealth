<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('posts.index');
//});

Auth::routes();

Route::get('/user/{id}', 'UserController@show');
Route::put('/user/{id}', 'UserController@update');
Route::get('/category/{categorie:category}', 'CategorieController@show');
Route::get('/posts/create', 'PostController@create');
Route::get('/', 'PostController@index')->name('home');
Route::resource('/posts', 'PostController');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/{id}', 'PostController@show');

Route::post('/comments/store', 'CommentController@store');

Route::post('/posts/store', 'PostController@store');
