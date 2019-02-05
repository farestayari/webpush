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

Route::get('/','HomeController@welcome')->name('welcome');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/get_player','HomeController@playerId')->name('playerId');

Route::get('/admin/broadcast','HomeController@showManager')->name('showManager');

Route::get('admin/history','HomeController@showHistory')->name('showHistory');

Route::post('admin/new_notification','HomeController@handleNotifications')->name('handleNotifications');

Route::get('admin/unicast', 'HomeController@sendUnicastNotification')->name('sendUnicastNotification');

Route::post('admin/single_notification', 'HomeController@handleUnicastNotification')->name('handleUnicastNotification');
