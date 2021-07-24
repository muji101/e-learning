<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/class', [ClassController::class, 'index'])->name('class');
Route::get('/class/{id}', [ClassController::class, 'detail'])->name('class_detail');
Route::get('/class/mentor/{id}', [ClassController::class, 'mentor'])->name('class_mentor');
Route::get('/class/video/{id}', [ClassController::class, 'video'])->name('class_video');

Route::get('/search', [ClassController::class, 'search'])->name('search');

// middleware_default
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('profile');

    Route::get('/settings', [DashboardSettingController::class, 'store'])->name('profile-setting');

    Route::get('/class', [DashboardClassController::class, 'index'])->name('class');
    Route::get('/class/create', [DashboardClassController::class, 'create'])->name('class-create');
    Route::get('/class/{id}', [DashboardClassController::class, 'detail'])->name('class-detail');

    Route::get('/category', [DashboardCategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category-create');
    Route::post('/category/store', [DashboardCategoryController::class, 'store'])->name('category-store');
    Route::get('/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('category-edit');
    Route::post('/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('category-update');
    Route::delete('/category/delete/{id}', [DashboardCategoryController::class, 'destroy'])->name('category-delete');
});


// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/categories', 'CategoryController@index')->name('categories');
// Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

// Route::get('/details/{id}', 'DetailController@index')->name('detail');
// Route::post('/details/{id}', 'DetailController@add')->name('detail-add');



// Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');

// Route::get('/success', 'CartController@success')->name('success');

// Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');


// example
// Route::group(['middleware' => ['auth']], function (){
//     Route::get('/cart', 'CartController@index')->name('cart');
//     Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');

//     Route::post('/checkout', 'CheckoutController@process')->name('checkout');

//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//     Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');
//     Route::post('/dashboard/products', 'DashboardProductController@store')->name('dashboard-product-store');
//     Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-product-create');
//     Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-product-details');
//     Route::post('/dashboard/products/{id}', 'DashboardProductController@update')->name('dashboard-product-update');

//     Route::post('/dashboard/products/gallery/upload', 'DashboardProductController@uploadGallery')->name('dashboard-product-gallery-upload');
//     Route::get('/dashboard/products/gallery/delete/{id}', 'DashboardProductController@deleteGallery')->name('dashboard-product-gallery-delete');

//     Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transaction');
//     Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')->name('dashboard-transactions-details');
//     Route::post('/dashboard/transactions/{id}', 'DashboardTransactionController@update')->name('dashboard-transactions-update');

//     Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-settings-store');
//     Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-settings-account');
//     Route::post('/dashboard/account/{redirect}', 'DashboardSettingController@update')->name('dashboard-settings-redirect');

// });

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth','admin'])
//     ->group(function(){
//         Route::get('/', 'DashboardController@index')->name('admin-dashboard');
//         Route::resource('category', 'CategoryController');
//         Route::resource('user', 'UserController');
//         Route::resource('product', 'ProductController');
//         Route::resource('product-gallery', 'ProductGalleryController');
//         Route::resource('transaction', 'TransactionController');
// });
