<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BoatsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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



Route::get('/', [BoatController::class, 'home']);
Route::get('/signup/customer', [BoatController::class, 'customerSignup']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/boats', [BoatsController::class, 'index'])->name('boats');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');

Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::post('/signup', [AuthController::class, 'handleSignup'])->name('handleSignup');

Route::post('/login', [AuthController::class, 'processLogin'])->name('login.submit');
Route::get('/signup/{type?}', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/employee/signup', [EmployeeController::class, 'handleSignup'])->name('employee.signup.submit');

Route::get('/boats', [BoatsController::class, 'index'])->name('boats');


