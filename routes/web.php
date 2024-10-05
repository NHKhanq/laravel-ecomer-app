<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController   ;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    //(['auth', 'role:admin'])
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')-> name('admindashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'index')-> name('allcategory');
        Route::get('/admin/add-category', 'addCategory')-> name('addcategory');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/admin/all-subcategory', 'index')-> name('allsubcategory');
        Route::get('/admin/add-subcategory', 'addSubCategory')-> name('addsubcategory');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-prod', 'index')-> name('allproduct');
        Route::get('/admin/add-prod', 'addProduct')-> name('addproduct');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/pending-order', 'index')-> name('pendingorder');
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
