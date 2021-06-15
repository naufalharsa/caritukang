<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\mitraController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use App\Models\Mitra;
use App\Models\Customer;

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

// Route::get('/', [adminController::class,'index']);

Route::get('/', function(){
    return view('auth.Login');
})->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::post('/storeregister',[LoginController::class, 'storeregister'])->name('storeregister');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::get('/logout',[LoginController::class, 'postlogout'])->name('logout');



Route::group(['middleware' => ['auth']], function(){
    Route::resource('administrators',adminController::class);
    Route::resource('customers',customerController::class);
    Route::resource('mitras',mitraController::class);
    Route::resource('reports', reportController::class);

});





