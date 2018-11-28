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




//----------------- Guest/User(ALL) 

Route::get('/', 'HomeController@home')->name('home');
Auth::routes();

//----------------- NON AUTH
Route::middleware(['isGuest'])->group(function () {
    Route::get('/user/register/{noGuest?}', 'userController@create')->name('user.register');
    Route::post('/user/store', 'userController@store')->name('user.store');
    Route::get('/user/login', function(){return view('user.login');})->name('user.login');

  
    Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login');
});





Route::middleware(['guestRedirect'])->group(function () {

    Route::middleware(['chooseRole'])->group(function () {

        Route::middleware(['owner'])->group(function () {
        
        });
        Route::middleware(['player'])->group(function () {
        
        });
        
        Route::get('/matches', 'matchController@index')->name('match.index');

    });

    Route::get('/chooseRole', 'chooseRole@create')->name('chooseRole.create');
    Route::post('/chooseRole/store', 'chooseRole@store')->name('chooseRole.store');


    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});














