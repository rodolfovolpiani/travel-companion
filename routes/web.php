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
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/my-profile', function () {
    return view('my-profile');
});


Route::get('/my-travels', function () {
    return view('my-travels');
});

Route::get('/travels', function () {
    return view('travels');
});

Route::get('/login', function () {
    return view('login');
});


/*Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
});*/