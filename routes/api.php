<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// user
Route::post('/v1/user/login', 'Api\\UserController@login');
Route::post('/v1/user/logout', 'Api\\UserController@logout');
Route::post('/v1/user/register', 'Api\\UserController@register');

// Menu
Route::get('/v1/menu', 'Api\\MenuController@index');
Route::get('/v1/menu-detail/{id}', 'Api\\MenuController@detail');

// service
Route::get('/v1/service', 'Api\\ServiceController@index');
Route::get('/v1/service-detail/{id}', 'Api\\ServiceController@detail');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
