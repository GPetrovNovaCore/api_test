<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [WelcomeController::class, 'showWelcomePage'])->name('welcome');
Route::get('authorization', [LoginController::class, 'authorization'])->name('authorization');

Route::get('/products/{title}-{id}', [ProductController::class, 'showProduct'])->name('products.show');
Route::get('/categories/{title}-{id}/products', [CategoryProductController::class, 'showProducts'])->name('categories.products.show');


Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
