<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

route::get('/', HomeController::class);

Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProdukController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProdukController::class, 'beautyhealth']);
    Route::get('/home-care', [ProdukController::class, 'homecare']);
    Route::get('/baby-kid', [ProdukController::class, 'babyKid']);
});

route::get('/user/{id}/{nama}', UserController::class);
route::get('/sales', SalesController::class);


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
