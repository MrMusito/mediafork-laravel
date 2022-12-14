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

Route::get('/', function() {
    // return view('welcome');
    return 'Hello world!';
});

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::post('/form', [IndexController::class, 'store'])->name('form');
