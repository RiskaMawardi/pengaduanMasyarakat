<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;
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
//     return view('auth.register');
// });


//Register
Route::get('index-register',[AuthController::class,'index']);
Route::post('index-register',[AuthController::class,'register'])->name('register');


//Login
Route::get('index-login',[AuthController::class,'indexLogin']);
Route::post('index-login', [AuthController::class, 'storeLogin'])->name('login');

//logout
Route::get('/logout',[AuthController::class,'logout']);


//Route Masyarakat
Route::get('index-masyarakat',[MasyarakatController::class,'index']);
Route::post('upload',[MasyarakatController::class,'upload'])->name('upload');




//admin route
Route::get('dashboard-admin',[AdminController::class,'index']);

//reg admin
Route::get('reg-admin',[AdminController::class,'indexRegis']);
Route::post('reg-admin',[AdminController::class,'regAdmin'])->name('regAdmin');

//log admin
Route::get('log-admin',[AdminController::class, 'loginAd']);
