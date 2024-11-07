<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\TestUser;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'register');
Route::view('register', 'register')->name('register');
Route::view('login', 'login')->name('login');
// Route::view('user', 'user')->name('user');
Route::get('user', function(){
    return view('user');
})->name('user');
// ->middleware('isValidUser',TestUser::class);
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

// Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')
// ->middleware('isValidUser:admin,reader',TestUser::class);
// Route::get('dashboard/inner', [UserController::class, 'innerPage'])->name('inner')
// ->middleware('isValidUser:reader,admin',TestUser::class);


Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')
->middleware(["auth",'isValidUser:admin']);
Route::get('dashboard/inner', [UserController::class, 'innerPage'])->name('inner')
->middleware(["auth"]);


// Route::middleware(['okUser'])->group(function(){
//     Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
//     Route::get('dashboard/inner', [UserController::class, 'innerPage'])->name('inner')->withoutMiddleware(TestUser::class);
// });
Route::get('logout', [UserController::class, 'logout'])->name('logout');