<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThongtinSVController;



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


Route::get('/', [ProductController::class,'listProduct']);
Route::get('/list', [ProductController::class,'listProduct']);
Route::get('/create', [ProductController::class,'createProduct']);
Route::post('/handle_create', [ProductController::class,'handleCreateProduct']);
Route::get('/update/{idPr}', [ProductController::class,'updateProduct']);
Route::post('/handle_update', [ProductController::class,'handleUpdateProduct']);
Route::get('/delete/{idPr}', [ProductController::class,'handle_delete']);



