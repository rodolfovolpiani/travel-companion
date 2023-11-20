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

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

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

    Route::get('/login', function () {
        return redirect()->route('my-profile');
    });


    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/{any}', function () {
        return redirect()->route('login')->with('error', 'Você não está logado.');
    })->where('any', '.*');
});
