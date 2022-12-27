<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// FrontEnd Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/services', [ServiceController::class, 'view'])->name('services');
Route::get('/services/search', [ServiceController::class, 'search'])->name('services.search');
// FrontEnd Routes

// BackEnd Routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin-register', [AdminController::class, 'register'])->name('admin-register');
Route::post('/admin-register', [AdminController::class, 'regstore'])->name('admin-register');
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');
Route::group(['middleware'=>'admin_auth'], function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Category CRUD Routes
    Route::get('/admin/category', [CategoryController::class, 'category'])->name('admin.category');
    Route::get('/admin/category/manage-category', [CategoryController::class, 'manage_category'])->name('category.manage-category');
    Route::post('/admin/category/manage-category/insert', [CategoryController::class, 'insert'])->name('category.insert');
    Route::get('/admin/category/manage-category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/admin/category/manage-category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    // Category CRUD Routes

    // Category Status Update Route
    Route::get('/admin/category/status/{status}/{id}', [CategoryController::class, 'status'])->name('category.status');
    // Category Status Update Route    

   // Coupon CRUD Routes 
    Route::get('/admin/coupon', [CouponController::class, 'coupon'])->name('admin.coupon');
    Route::get('/admin/coupon/manage-coupon', [CouponController::class, 'manage_coupon'])->name('coupon.manage-coupon');
    Route::post('/admin/coupon/manage-coupon/insert', [CouponController::class, 'insert'])->name('coupon.insert');
    Route::get('/admin/coupon/manage-coupon/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
    Route::post('/admin/coupon/manage-coupon/update/{id}', [CouponController::class, 'update'])->name('coupon.update');
    Route::get('/admin/coupon/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');
    // Coupon CRUD Routes

    // Coupon Status Update Route
    Route::get('/admin/coupon/status/{status}/{id}', [CouponController::class, 'status'])->name('coupon.status');
    // Coupon Status Update Route

   // Services CRUD Routes 
   Route::get('/admin/services', [ServiceController::class, 'services'])->name('admin.services');
   Route::get('/admin/services/manage-services', [ServiceController::class, 'manage_services'])->name('services.manage-services');
   Route::post('/admin/services/manage-services/insert', [ServiceController::class, 'insert'])->name('services.insert');
   Route::get('/admin/services/manage-services/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
   Route::post('/admin/services/manage-services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
   Route::get('/admin/services/delete/{id}', [ServiceController::class, 'delete'])->name('services.delete');
   // Services CRUD Routes

   // Services Status Update Route
   Route::get('/admin/services/status/{status}/{id}', [ServiceController::class, 'status'])->name('services.status');
   // Services Status Update Route    
    
    //Admin Logout Route
    Route::get('admin/logout', function(){
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout Successfully');
        return redirect('admin');
    })->name('logout');
});
// BackEnd Routes