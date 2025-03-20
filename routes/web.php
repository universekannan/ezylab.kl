<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
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
Route::get('/users_type_list', [UserController::class, 'usertypelist'])->name('users.usertypelist');

Route::post('/usertypeinsert', [UserController::class, 'usertypeinsert'])->name('roles.usertypeinsert');
Route::post('/usertypeupdate/{id}', [UserController::class, 'usertypeupdate'])->name('roles.usertypeupdate');

//patient//
Route::get('/patient', [UserController::class, 'index'])->name('patient.index');
    Route::get('/patient_list', [UserController::class, 'Patientlist'])->name('patient.list');
    Route::post('/patient_insert', [UserController::class, 'store'])->name('patient.store');
    Route::post('/patient_update', [UserController::class, 'update'])->name('patient.update');
    Route::post('/patient_delete', [UserController::class, 'destroy'])->name('patient.destroy');
    Route::post('/patient_status', [UserController::class, 'status'])->name('patient.status');



Route::get('patienttypes', [App\Http\Controllers\UserController::class, 'patienttypes'])->name('patienttypes');
Route::get('/patient_type_list', [UserController::class, 'patienttypelist'])->name('patient.patienttypelist');

Route::post('/patienttypeinsert', [UserController::class, 'patienttypeinsert'])->name('roles.patienttypeinsert');
Route::post('/patienttypeupdate/{id}', [UserController::class, 'patienttypeupdate'])->name('roles.patienttypeupdate');


require __DIR__.'/auth.php';
