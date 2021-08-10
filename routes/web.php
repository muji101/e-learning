<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardClassController;
use App\Http\Controllers\DashboardClassUserController;
use App\Http\Controllers\DashboardChapterController;
use App\Http\Controllers\DashboardVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\SearchController;
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

// route home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Admin regis
Route::get('/register/admin', function () {
    return view('pages.dashboard.admin.register');
});

// route category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{name}', [CategoryController::class, 'detail'])->name('categories-detail');

// route search
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/{slug}', [SearchController::class, 'searchCategory'])->name('search-category');

// Route class front
// Route::get('/class', [ClassController::class, 'index'])->name('class_list');
Route::get('/class/{slug}/{id}', [ClassController::class, 'detailClass'])->name('class_detail');
Route::get('/class/mentor/{id}', [ClassController::class, 'mentor'])->name('class_mentor');

//Route join Kelas
// Route::middleware([])->group(function () {
// });
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/class/{id}', [ClassController::class, 'success'])->name('class_join_success');
    Route::get('/class/video/{classid}/{videoid}', [ClassController::class, 'video'])->name('class_video');
    Route::post('/class/video/{classid}/{videoid}', [ClassController::class, 'join'])->name('class_join');
    
    Route::post('/class/reviews', [ClassController::class, 'store'])->name('class_review');
    Route::get('/class/{slug}/{id}/reviews', [ClassController::class, 'review'])->name('class_detail_review');
});




// middleware_default
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('profile');

    Route::get('/settings/listUser', [DashboardSettingController::class, 'index'])->name('list-user');
    // route edit update profile
    Route::get('/settings/edit/{id}', [DashboardSettingController::class, 'edit'])->name('password-edit');
    Route::post('/settings/update/{id}', [DashboardSettingController::class, 'update'])->name('password-update');
    Route::post('/settings/updatePass/{id}', [DashboardSettingController::class, 'updatePass'])->name('password-updatePass');

    // route class teacher
    Route::get('/class', [DashboardClassController::class, 'index'])->name('class');
    Route::get('/class/create', [DashboardClassController::class, 'create'])->name('class-create');
    Route::get('/class/{id}', [DashboardClassController::class, 'detail'])->name('class-detail');
    Route::post('/class/store', [DashboardClassController::class, 'store'])->name('class-store');
    Route::get('/class/edit/{id}', [DashboardClassController::class, 'edit'])->name('class-edit');
    Route::post('/class/update/{id}', [DashboardClassController::class, 'update'])->name('class-update');
    Route::delete('/class/delete/{id}', [DashboardClassController::class, 'destroy'])->name('class-delete');

    // route chapter
    Route::get('/chapter/create/{id}', [DashboardChapterController::class, 'create'])->name('chapter-create');
    Route::post('/chapter/store', [DashboardChapterController::class, 'store'])->name('chapter-store');
    Route::get('/chapter/edit/{id}', [DashboardChapterController::class, 'edit'])->name('chapter-edit');
    Route::post('/chapter/update/{id}', [DashboardChapterController::class, 'update'])->name('chapter-update');
    Route::delete('/chapter/delete/{id}', [DashboardChapterController::class, 'destroy'])->name('chapter-delete'); 

    // route video
    Route::get('/video/create/{idchapter}/{idclass}', [DashboardVideoController::class, 'create'])->name('video-create');
    Route::post('/video/store', [DashboardVideoController::class, 'store'])->name('video-store');
    Route::get('/video/edit/{id}', [DashboardVideoController::class, 'edit'])->name('video-edit');
    Route::post('/video/update/{id}', [DashboardVideoController::class, 'update'])->name('video-update');
    Route::delete('/video/delete/{id}', [DashboardVideoController::class, 'destroy'])->name('video-delete');   
    
    // route class user
    Route::get('/myclass', [DashboardClassUserController::class, 'index'])->name('myclass');
    Route::get('/myclass/{id}/{name}', [DashboardClassUserController::class, 'category'])->name('myclass_category');

    // route category
    Route::get('/category', [DashboardCategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category-create');
    Route::post('/category/store', [DashboardCategoryController::class, 'store'])->name('category-store');
    Route::get('/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('category-edit');
    Route::post('/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('category-update');
    Route::delete('/category/delete/{id}', [DashboardCategoryController::class, 'destroy'])->name('category-delete');


    // upcomming soon Admin
    Route::get('/admin/class', [DashboardAdminController::class, 'adminClass'])->name('admin-class');
    Route::get('/admin/category', [DashboardAdminController::class, 'adminCategory'])->name('admin-category');

});
