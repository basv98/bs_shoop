<?php

use Illuminate\Support\Facades\{Auth, Route};
use App\Http\Controllers\{HomeController, InvoceController, PayController, ProductController};

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('product/view/{id}', [ProductController::class, "view"])->name("viewProduct");
Route::post('product/invoce', [InvoceController::class, "createInvoce"])->name("createInvoce");
Route::get('product/pay/{id}', [PayController::class, "index"])->name("payProduct");
Route::post('product/pay', [PayController::class, "pay"])->name("pay");

Route::get('product/finished', [ProductController::class, "finishPurchase"])->name("finished");