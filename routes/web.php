<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
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
// front
Route::get('/', [FrontController::class, "index"])->name('home');

Route::get('/admin', [FrontController::class, "admin"])->name('admin.index');
//about
Route::get('/admin/about/', [AboutController::class, "index"])->name('about.index');