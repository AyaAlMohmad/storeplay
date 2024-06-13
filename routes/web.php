<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontController::class, 'index'])->name('front');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/service',[ServiceController::class, 'index'])->name('service');
Route::get('/service/{id}',[ServiceController::class, 'show'])->name('service.show');
Route::get('/products/{id}',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}',[ProductController::class, 'show'])->name('product.show');
Route::delete('/product/{id}',[ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');
Route::get('/category/{id}',[ProductController::class, 'categoryproduct'])->name('category.product');
Route::post('/order',[UserController::class, 'order'])->name('order.store')->middleware('auth');
Route::get('/order',[UserController::class, 'favorit'])->name('user.order')->middleware('auth');
Route::post('/favoritstore',[UserController::class, 'favoritstore'])->name('user.favoritstore')->middleware('auth');
Route::get('/user',[UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/user/edit',[UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::post('/user/{id}',[UserController::class, 'update'])->name('user.update')->middleware('auth');

Route::get('deleteAccount',[UserController::class, 'viewDeleteAccount'])->name('user.viwedeletAccount');
Route::post('deleteAccount',[UserController::class, 'deleteAccount'])->name('user.deletAccount');