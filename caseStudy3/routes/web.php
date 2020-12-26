<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;
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


Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth', 'checkAccountActive'])->prefix('admin')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('dashboard', function () {
        return view('admin.layout.dashboard');
    })->name('admin.dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/create', [ProductController::class, 'store'])->name('products.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('/{id}/edit', [ProductController::class, 'update'])->name('products.update');
        Route::get('/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
    });
    Route::prefix('slides')->group(function () {
        Route::get('/', [SlideController::class, 'index'])->name('slides.index');
        Route::get('/create', [SlideController::class, 'create'])->name('slides.create');
        Route::post('/create', [SlideController::class, 'store'])->name('slides.store');
        Route::get('/{id}/edit', [SlideController::class, 'edit'])->name('slides.edit');
        Route::post('/{id}/edit', [SlideController::class, 'update'])->name('slides.update');
        Route::get('/{id}/destroy', [SlideController::class, 'destroy'])->name('slides.destroy');
    });
    Route::prefix('customers')->group(function (){
        Route::get('/',[CustomerController::class,'index'])->name('customers.index');
    });
    Route::prefix('orders')->group(function (){
        Route::get('/',[OrderController::class,'index'])->name('orders.index');
        Route::get('{id}/detail',[OrderController::class,'orderdetail'])->name('orders.order_detail');
        Route::get('{id}/delete',[OrderController::class,'destroy'])->name('orders.delete');
        Route::get('{id}/confirm',[OrderController::class,'confirm'])->name('orders.confirm');
    });

});
Route::get('/',function (){
   return view('index');
})->name('index');
Route::prefix('index')->group(function (){
   Route::get('/',[ProductController::class,'product'])->name('index.home');
   Route::get('{id}/detail',[ProductController::class,'detail'])->name('index.detail');
   Route::get('{id}/category', [ProductController::class, 'showBookByCategory'])->name('index.category');
   Route::get('/search',[ProductController::class,'search'])->name('index.search');

   Route::prefix('cart')->group(function (){
        Route::get('/{id}/add-cart',[CartController::class,'addToCart'])->name('cart.add');
        Route::get('/{id}/minus-cart',[CartController::class,'minusToCar'])->name('cart.minus');
        Route::get('cart',[CartController::class,'showCart'])->name('cart.show');
        Route::get('delete',[CartController::class,'deleteCart'])->name('cart.delete');
        Route::get('/{id}/delete-by-one',[CartController::class,'deleteProduct'])->name('cart.deleteProduct');
        Route::post('checkout',[CartController::class,'checkout'])->name('cart.checkout');
    });

});




