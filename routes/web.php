<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
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

// Route::get('/', [ HomeController::class, 'home']);
// Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/', [HomeController::class,'index']);
Route::post('/addToCart', [HomeController::class,'addToCart'])->name('add.cart');
Route::post('/getTotalAmounts', [HomeController::class,'getTotalAmounts'])->name('total.amounts');
Route::delete('/deleteRecord', [HomeController::class,'destroy'])->name('delete.item');