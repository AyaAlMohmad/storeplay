<?php

use App\Http\Controllers\Dashboard\AboutController;

use App\Http\Controllers\Dashboard\CategoryController;

use App\Http\Controllers\Dashboard\DashController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SocialController;
use App\Http\Controllers\Dashboard\SubCategoryController;

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
// Auth::routes();
Route::prefix('dash/')->middleware('auth')->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dash.index');





    Route::resource('abouts', AboutController::class);
    Route::get('SoftAbouts', [AboutController::class, 'recycleBin'])->name('abouts.soft');
    Route::get('about/finldelete/{id}', [AboutController::class, 'finalDelete'])->name('abouts.finaldelete');
    Route::get('about/restore/{id}', [AboutController::class, 'restore'])->name('abouts.restore');

    Route::resource('socials', SocialController::class);
    Route::get('Softsocials', [SocialController::class, 'recycleBin'])->name('socials.soft');
    Route::get('social/finldelete/{id}', [SocialController::class, 'finalDelete'])->name('socials.finaldelete');
    Route::get('social/restore/{id}', [SocialController::class, 'restore'])->name('socials.restore');

    Route::resource('services', ServiceController::class);
    Route::get('Softservices', [ServiceController::class, 'recycleBin'])->name('services.soft');
    Route::get('service/finldelete/{id}', [ServiceController::class, 'finalDelete'])->name('services.finaldelete');
    Route::get('service/restore/{id}', [ServiceController::class, 'restore'])->name('services.restore');


    Route::resource('categories', CategoryController::class);
    Route::get('Softcategories', [CategoryController::class, 'recycleBin'])->name('categories.soft');
    Route::get('category/finldelete/{id}', [CategoryController::class, 'finalDelete'])->name('categories.finaldelete');
    Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');



    Route::resource('sub_categories', SubCategoryController::class);
    Route::get('Softsub_categories', [SubCategoryController::class, 'recycleBin'])->name('sub_categories.soft');
    Route::get('sub_category/finldelete/{id}', [SubCategoryController::class, 'finalDelete'])->name('sub_categories.finaldelete');
    Route::get('sub_category/restore/{id}', [SubCategoryController::class, 'restore'])->name('sub_categories.restore');


    Route::resource('products', ProductController::class);
    Route::get('Softproducts', [ProductController::class, 'recycleBin'])->name('products.soft');
    Route::get('product/finldelete/{id}', [ProductController::class, 'finalDelete'])->name('products.finaldelete');
    Route::get('product/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');

    Route::resource('orders',OrderController::class);
    Route::get('orders/sentEmail/{id}',[OrderController::class,'viewemail'])->name('orders.sent');
    Route::post('orders/sentemail',[OrderController::class,'sentemail'])->name('orders.sentemail');
});
