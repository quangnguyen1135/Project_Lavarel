<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;//Import controller
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\ProductFrontendController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\PaymentController;
use App\Http\Controllers\frontend\infoUserController;
use App\Http\Controllers\frontend\BookTableController;

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
Route::get('/', [ProductFrontendController::class, 'productHome'])->name('productFrontend.index');

Route::get('/Contact', [ContactController::class,'index'])->name('Contact.page');
Route::post('/Contact', [ContactController::class,'postContact'])->name('Contact.post');


Route::get('/products/{id}', [ProductFrontendController::class, 'showDetails'])->name('products.details');

Route::get('/productsPage/{cate_id?}', [ProductFrontendController::class, 'getProductsByCategory'])->name('products.details');


// login Customer
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

// info User
Route::get('/info', [infoUserController::class, 'index'])->name('info.user');

// register customers
Route::controller(CustomerController::class)->group(function (){
    Route::get('/register','index')->name('register');
    Route::post('/postRegister', 'method_register')->name('registerPost');
});

// Cart
Route::get('/gio-hang', [CartController::class, 'Cart'])->name('shopping.cart');
Route::get('/gio-hang/{id}', [CartController::class, 'addCart'])->name('add.cart');
Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart');

// payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment'); // Điều hướng đến trang thanh toán
Route::post('/payment', [PaymentController::class, 'Payment'])->name('payment.process'); // Xử lý thanh toán

// book table
Route::get('reservations/create', [BookTableController::class, 'create'])->name('reservations.create');
Route::post('reservations', [BookTableController::class, 'store'])->name('reservations.store');
Route::get('reservations', [BookTableController::class, 'index'])->name('reservations.index');