<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\LoginController;
use App\Models\User;
use App\Http\Controllers\UserRoleController;

// Middleware 


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('dashboard');
});

// Route Model Binding 
Route::get('/user/{user}', function (User $user) {
    return view('profile', ['user' => $user]);
})->middleware(CheckLogin::class);


Route::get('/home', function () {
    return view('home');
})->middleware(CheckLogin::class);


// Middleware - End

// Many To Many Relationship 


Route::get('/users-with-roles', [UserRoleController::class, 'index'])->name('users.with.roles');
Route::delete('/users-with-roles/{id}', [UserRoleController::class, 'destroy'])->name('users.with.roles.destroy');



// Many To Many Relationship - End