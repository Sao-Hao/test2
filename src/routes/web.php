<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'index']);
//Route::get('/products/{productId}', [ProductController::class, 'index']);
Route::get('/products/{productId}/update', [ProductController::class, 'edit']);
Route::post('/products/{productId}/update', [ProductController::class, 'update']);

//Route::get('/products/register', [ProductController::class, 'index']);
//Route::get('/products/search', [ProductController::class, 'index']);
//Route::get('/products/{productId}/delete', [ProductController::class, 'index']);
//Route::post('/product/upload', [ProductController::class, 'upload']);

