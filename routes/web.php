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

Route::get('/', 'PostsController@index');
//Route::get('/', 'PagesController@index');
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/post', 'DashboardController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
