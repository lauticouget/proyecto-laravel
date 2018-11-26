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

Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/user/login', function(){
    return view('user.login');
})->name('user.login');

Route::get('/user/register', 'userController@create')->name('user.register');

Route::post('/user/store', 'userController@store')->name('user.store');

Route::get('/chooseRole', 'chooseRole@create')->name('chooseRole.create');
