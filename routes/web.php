<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users_list', [UserController::class, 'userlist'])->name('users.list');
    Route::post('/users_insert', [UserController::class, 'store'])->name('users.store');
    Route::post('/users_update', [UserController::class, 'update'])->name('users.update');
    Route::post('/users_delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users_status', [UserController::class, 'status'])->name('users.status');


Route::get('usertypes', [App\Http\Controllers\UserController::class, 'usertypes'])->name('usertypes');



require __DIR__.'/auth.php';
