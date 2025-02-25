<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->post('/orders', [OrderController::class, 'store']);


Route::middleware('auth:sanctum')->post('/send-plan-email', [OrderController::class, 'sendEmail']);



Route::middleware('auth:sanctum')->get('/user/orders', [AccountController::class, 'getOrders']);
Route::middleware('auth:sanctum')->post('/update-password', [AccountController::class, 'updatePassword']);


Route::post('/contact-us', [AccountController::class, 'storeContactRequest']);
