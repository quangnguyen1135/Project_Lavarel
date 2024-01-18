<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;//Import controller
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\frontend\ProductFrontendController;
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
//     return view('welcome');
// });

Route::get('/admin', [AuthController::class,'index'])->name('auth.admin');
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard.index');

Route::post('/login', [AuthController::class,'login'])->name('auth.login');

Route::get('/admin/product', [ProductController::class,'product'])->name('product.index');
Route::get('/admin/product/edit/{id}', [ProductController::class,'getOneProduct'])->name('admin.product.editid');
Route::get('/admin/product/edit')->name('admin.product.edit');
Route::post('/admin/product/edit', [ProductController::class,'edit'])->name('admin.product.doEdit');
Route::get('/admin/product/addProduct', [ProductController::class,'addProduct'])->name('admin.product.add');
Route::post('/admin/product/addProduct', [ProductController::class, 'doAddProduct'])->name('admin.product.doAddProduct');
Route::get('/admin/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.product.delete');
Route::get('/', [HomeController::class,'index'])->name('frontend.home');
Route::get('/', [ProductFrontendController::class,'product'])->name('productFrontend.index');

Route::get('/Contact', [ContactController::class,'index'])->name('Contact.page');
Route::post('/Contact', [ContactController::class,'postContact'])->name('Contact.post');

