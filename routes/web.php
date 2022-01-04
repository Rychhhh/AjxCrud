<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Route\RouteController;
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

// Free View
Route::get('/', [RouteController::class, 'viewAwal']);

// Crud ajax with read
Route::get('product', [ProductController::class, 'index']);
Route::get('product/read', [ProductController::class, 'read']);
Route::get('product/create', [ProductController::class, 'create']);
Route::get('product/store', [ProductController::class, 'store']);
Route::get('product/edit/{id}', [ProductController::class, 'edit']);
Route::get('product/update/{id}', [ProductController::class, 'update']);
Route::get('product/destroy/{id}', [ProductController::class,'destroy']);

