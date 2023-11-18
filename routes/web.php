<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;


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
Route::get('/', [FrontController::class, 'index']);
Route::get('/tentangku', [FrontController::class, 'about']);
Route::get('/ootd', [FrontController::class, 'ootdByMe']);
Route::get('/alifia-cookies', [FrontController::class, 'alifiaCookies']);
Route::get('/racunshopeebyta', [FrontController::class, 'racunShopeeByTa']);
Route::get('/contact', [FrontController::class, 'contact']);
