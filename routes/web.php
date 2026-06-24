<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:web'])->group(function () {
   Route::get('users-account/{id}/edit', [UserController::class, 'editAccount']);
   Route::put('users-account/{id}', [UserController::class, 'updateAccount']);
   
Route::resource('users', UserController::class);
Route::resource('organizations', OrganizationController::class);

}); 



