<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\mitraController;
use App\Http\Controllers\reportController;
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

// Route::get('/', function () {
//     return view('adminPage.adminPage');
// });
// Route::get('/customerPage', function () {
//     return view('customerPage.customerPage');
// });

// // Route::Resource('administrator', 'adminController');
// Route::get('/adminPage/createAdmin', [adminController::class,'create']);
// Route::get('/adminPage{administrator}', [adminController::class,'show'])->name('admin.show');
// Route::get('/customerPage', [customerController::class,'index']);

// Route::post('/', [adminController::class, 'store']);

Route::get('/', [adminController::class,'index']);
Route::resource('administrators',adminController::class);
// Route::get('/administrators/{administrator}/edit', [adminController::class, 'edit']);
Route::resource('customers',customerController::class);
Route::resource('mitra',mitraController::class);
Route::resource('laporan', reportController::class);