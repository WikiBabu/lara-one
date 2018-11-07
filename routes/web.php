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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', ['uses'=>'PagesController@index']);
Route::get('profile', ['uses'=>'PagesController@profile']);

Route::get('users', ['uses'=>'UserController@index']);
Route::get('users/create', ['uses'=>'UserController@create']);
Route::post('users', ['uses'=>'UserController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
