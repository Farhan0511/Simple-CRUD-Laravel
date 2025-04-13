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

use App\Http\Controllers\HomeController;

Route::get('/user' , [HomeController::class, 'index']); // Penulisan 1

Route::get('/' , [HomeController::class, 'dashboard']); 

Route::get('/login' , [HomeController::class, 'login']);

Route::get('/create' , [HomeController::class, 'create'])->name('create'); 

Route::post('/store' , [HomeController::class, 'store'])->name('store'); 

Route::get('/welcome', function () {
    return view('welcome');
});    
