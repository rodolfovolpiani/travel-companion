<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
});


// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
// Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
// Route::get('/items', 'ItemController@index')->name('items.index');
// Route::get('/items/create', 'ItemController@create')->name('item.create');
// Route::post('/items', 'ItemController@store')->name('item.store');
// Route::get('/my-items', 'ItemController@myItems')->name('item.myItems');
