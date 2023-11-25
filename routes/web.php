<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/users', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/my-profile', function () {
        return view('my-profile');
    })->name('my-profile');

    Route::get('/travels', function () {
        return view('travels');
    })->name('travels');

    Route::get('/create-travel', function () {
        return view('create-travel');
    })->name('create-travel');

    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/{any}', function () {
        return abort(404); // Redirecionar para uma página de erro 404 ou página inicial
    })->where('any', '.*');
});
