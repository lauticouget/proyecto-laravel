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
Route::group(['middleware' => 'App\Http\Middleware\ownerMiddleware'], function(){
       //
    });
    
Route::group(['middleware' => 'App\Http\Middleware\playerMiddleware'], function(){
       //
    });
    







Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/avg/{id}', 'HomeController@avg');
Route::get('/calendar', 'calendarController@index')->name('calendar.index');
Route::post('/calendar/test', 'calendarController@store')->name('calendar.test');

Route::get('/test', 'testController@navBar');
Route::get('/test/allall', 'testController@allEntities');

Route::get('/fields', 'fieldController@index')->name('fields.index');