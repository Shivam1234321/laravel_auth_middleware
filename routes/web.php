<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('login');
});


Auth::routes();

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index']);
});

Route::prefix('user')->middleware('isUser')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
});



