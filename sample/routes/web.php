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

Route::get('/add','UsersController@add');
Route::post('/add','UsersController@store');

//定义了一个路由组，以api为前缀
Route::group(['prefix' => 'demo'], function(){
    Route::resource('users', 'UsersController');
});