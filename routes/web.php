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

Auth::routes();

Route::get('register/player', function() {
    return view('register.player');
});
Route::get('register/field', function() {
    return view('register.field');
});
Route::post('register/player/create', 'RegisterController@create');
Route::post('register/player/store', 'RegisterController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/avg/{id}', 'HomeController@avg');
Route::get('/calendar', 'calendarController@index')->name('calendar.index');
Route::post('/calendar/test', 'calendarController@store')->name('calendar.test');

Route::get('/test', 'testController@navBar');
Route::get('/test/allall', 'testController@allEntities');