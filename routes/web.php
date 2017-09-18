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
    //echo phpinfo();
    return view('welcome');
});


Route::get('/sss/{x}/{y}', function ($x,$s) {
    return view('welcome1');
});

Route::resource('users', 'usersController');


Route::resource('admin/news', 'Admin\\newsController');
Route::resource('admin/posts', 'Admin\\PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
