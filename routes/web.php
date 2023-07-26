<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/' , '/guest');
Route::get('/guest/{page?}' ,[PagesController::class, 'index'])->name('guest');
Route::get('/login', [AuthController::class, 'auth'])->name('auth.login_user');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register_post'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/page/admin/{page?}' , [AdminController::class , 'index'])->name('admin');
Route::resource('/admin',AdminController::class);
Route::resource('/announcement',AnnouncementController::class);
Route::resource('/carousel',CarouselController::class);
Route::get('/page/doctor/{page?}' , [DoctorController::class , 'index'])->name('doctor');
Route::resource('/doctor',DoctorController::class);
Route::get('/page/client/{page?}' , [ClientController::class , 'index'])->name('client');
Route::resource('/appointment' , AppointmentController::class);

Route::fallback(function() {
    return 'Hm, why did you land here somehow?';
});