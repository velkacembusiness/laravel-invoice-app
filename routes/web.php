<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('invoices', \App\Http\Controllers\InvoicesController::class);
    Route::get('invoices/{invoice_id}/download', [\App\Http\Controllers\InvoicesController::class,'download'])->name('invoices.download');
    Route::resource('customers', \App\Http\Controllers\CustomersController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
});
