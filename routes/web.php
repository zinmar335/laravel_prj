<?php

use App\Receipe;
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

// app()->bind('App\test', function() {
// 	return new \App\test("nani sore!");
// });

// app()->bind('test', function() {
// 	return new \App\test("nani sore!");
// });

Route::get('/', function () {
    dd(app('test'));
});

// Route::get('/', function () {
//     dd(app('test'), app('test'));
// });

Route::group(['middleware' => ['auth', 'can:view']], function () {
    Route::resource('receipe', 'ReceipeController');
});

Route::get('home', 'HomeController@index');
Auth::routes();
