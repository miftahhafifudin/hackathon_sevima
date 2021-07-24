<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\VaksinController;

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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/statistik', [infoController::class, 'index']);
Route::get('/rumahsakit', [infoController::class, 'index2']);

Route::get('/vaksin', [VaksinController::class, 'index'])->name('vaksin');
Route::get('/vaksin/show', [VaksinController::class, 'show'])->name('vaksin.show');
Route::post('/vaksin', [VaksinController::class, 'store']);
Route::delete('/vaksin/{vaksin}', [VaksinController::class, 'destroy'])->name('vaksin.delete');
Route::put('/vaksin/{vaksin}', [VaksinController::class, 'put'])->name('vaksin.put');
Route::get('/vaksin/{vaksin}', [VaksinController::class, 'update'])->name('vaksin.update');
