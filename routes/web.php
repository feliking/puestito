<?php

use App\Http\Controllers\IndexController;
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

Route::get('/welcome', function () {
    return view('main');
});

Route::get('/', [IndexController::class, 'main']);
Route::get('/product/{id}', [IndexController::class, 'product'])->name('product_detail');
Route::get('/category/{category_id}', [IndexController::class, 'categoryProduct'])->name('category_products');
