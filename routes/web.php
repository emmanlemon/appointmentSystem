<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\AppointmentController;
use App\Http\Controllers\PrintController;

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
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('auth.forgotPassword');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot_password');
Route::post('/reset-password', [AuthController::class, 'reset_password'])->name('auth.reset_password');
Route::post('/resetPassword', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');
Route::get('/reset-pass', [AuthController::class, 'reset_pass'])->name('auth.forgotPass');

Route::get('/print/{page?}/{id?}' , [PrintController::class , 'index'])->name('print');
Route::get('/page/admin/{page?}' , [AdminController::class , 'index'])->name('admin');
Route::resource('/admin',AdminController::class);
Route::resource('/announcement', AnnouncementController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/events', EventController::class);
Route::post('/services-post', [ServiceController::class , 'store_serviceChild'])->name('service.post');
Route::delete('/services-delete/{serviceChild?}',[ServiceController::class , 'delete_serviceChild'])->name('service.delete');
Route::resource('/carousel',CarouselController::class);
Route::get('/page/doctor/{page?}' , [DoctorController::class , 'index'])->name('doctor');
Route::resource('/doctor',DoctorController::class);
Route::get('/page/client/{page?}' , [ClientController::class , 'index'])->name('client');
Route::resource('/appointment' , AppointmentController::class);

Route::fallback(function() {
    return 'Hm, why did you land here somehow?';
});
