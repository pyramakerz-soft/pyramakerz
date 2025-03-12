<?php

use App\Http\Api\Controllers\AuthController;
use App\Http\Api\Controllers\PromocodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\Controllers\AccountController;
use App\Http\Api\Controllers\OrderController;
use App\Http\Api\Controllers\PlanController;
use App\Http\Api\Controllers\ProductsController;

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
Route::post('/resend-otp', [AuthController::class, 'resendOTP']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/products', [ProductsController::class, 'store']);
Route::middleware('auth:sanctum')->post('/packages', [PlanController::class, 'store']);
Route::middleware('auth:sanctum')->post('/orders', [OrderController::class, 'store']);


Route::middleware('auth:sanctum')->post('/send-plan-email', [OrderController::class, 'sendEmail']);



Route::middleware('auth:sanctum')->get('/user/orders', [AccountController::class, 'getOrders']);
Route::middleware('auth:sanctum')->post('/update-password', [AccountController::class, 'updatePassword']);
// Route::middleware('auth:sanctum')->post('/products/add', [ProductsController::class, 'store']);
Route::post('/validate-promocode', [PromocodeController::class, 'validatePromocode']);


Route::post('/contact-us', [AccountController::class, 'storeContactRequest']);
