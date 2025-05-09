<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


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

Route::get('/langTest', function () {
    dd(App::getLocale());
});



Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/blog', [CustomerController::class, 'blogs'])->name('customer.blogs');
// Route::resource('products', ProductsController::class);

Route::get('/blog-detail1', [CustomerController::class, 'blogs1'])->name('customer.blogs1');
Route::get('/blog-detail2', [CustomerController::class, 'blogs2'])->name('customer.blogs2');
Route::get('/blog-detail3', [CustomerController::class, 'blogs3'])->name('customer.blogs3');
Route::get('/schools', [CustomerController::class, 'schools'])->name('customer.schools');
Route::get('/students', [CustomerController::class, 'students'])->name('customer.students');
Route::get('/competitions', [CustomerController::class, 'competitions'])->name('customer.competitions');
Route::get('/alef-bot', [CustomerController::class, 'alefBot'])->name('customer.alefBot');
Route::get('/packages', [CustomerController::class, 'packages'])->name('customer.packages');
Route::get('/customize', [CustomerController::class, 'customizePackage'])->name('customer.customizePackage');

Route::get('/admin/products/view', [AdminController::class, 'viewProducts'])->name('admin.viewProducts');
Route::get('/admin/products/add_product', [AdminController::class, 'addProduct'])->name('admin.addProduct');
Route::get('/admin/products/edit_product/{id}', [AdminController::class, 'editProduct'])->name('admin.editProduct');

Route::get('/admin/packages/view', [AdminController::class, 'viewPackages'])->name('admin.viewPackages');
Route::get('/admin/packages/add_package', [AdminController::class, 'addPackage'])->name('admin.addPackage');
Route::get('/admin/products/edit_package/{id}', [AdminController::class, 'editPackage'])->name('admin.editPackage');

Route::get('/admin/promos/view', [AdminController::class, 'viewPromos'])->name('admin.viewPromos');
Route::get('/admin/promos/add_promo', [AdminController::class, 'addPromo'])->name('admin.addPromo');

Route::get('/admin/orders/view', [AdminController::class, 'viewOrders'])->name('admin.viewOrders');
Route::get('/admin/orders/view/{id}', [AdminController::class, 'manageOrder'])->name('admin.manageOrder');
/////
// Route::get('/view-products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/packages/{package}', [PlanController::class, 'show'])->name('customer.package_info');

//////
// Login and Registeration
Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('/verify-otp', [CustomerController::class, 'verifyOTP'])->name('customer.verify-otp');
Route::get('/account', [CustomerController::class, 'account'])->name('customer.account');


// Route::post('/resend-otp', [AuthController::class, 'resendOTP']);

// Langauge Change Route
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('change.lang');
