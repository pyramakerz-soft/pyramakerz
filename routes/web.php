<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('customer.index');
// });
Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/blog', [CustomerController::class, 'blogs'])->name('customer.blogs');
Route::get('/blog-detail1', [CustomerController::class, 'blogs1'])->name('customer.blogs1');
Route::get('/blog-detail2', [CustomerController::class, 'blogs2'])->name('customer.blogs2');
Route::get('/blog-detail3', [CustomerController::class, 'blogs3'])->name('customer.blogs3');
Route::get('/schools', [CustomerController::class, 'schools'])->name('customer.schools');
Route::get('/students', [CustomerController::class, 'students'])->name('customer.students');
Route::get('/competitions', [CustomerController::class, 'competitions'])->name('customer.competitions');
Route::get('/alef-bot', [CustomerController::class, 'alefBot'])->name('customer.alefBot');
Route::get('/packages', [CustomerController::class, 'packages'])->name('customer.packages');


// Login and Registeration
Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('/verify-otp', [CustomerController::class, 'verifyOTP'])->name('customer.verify-otp');
Route::get('/account', [CustomerController::class, 'account'])->name('customer.account');
// Route::post('/resend-otp', [AuthController::class, 'resendOTP']);