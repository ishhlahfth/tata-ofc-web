<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;


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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::group(['namespace' => 'content', 'prefix' => 'content'], function () {
        Route::get('/about-me', [AdminController::class, 'aboutMe']);
        Route::get('/bylifia', [AdminController::class, 'byTata']);
        Route::get('/experiences', [AdminController::class, 'experiences']);
        Route::get('/education', [AdminController::class, 'education']);
    });
    Route::get('/gallery-ootd', [AdminController::class, 'gallery']);
    Route::get('/alifia-cookies', [AdminController::class, 'cookies']);
    Route::get('/racun-shopee', [AdminController::class, 'shopping']);
});
