<?php

use App\Http\Controllers\PageController;
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


Route::get('/ads', [PageController::class, 'ads'])->name('page.ads');
Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/kontakt', [PageController::class, 'contact'])->name('page.contact');
Route::get('/', [PageController::class, 'index'])->name('page.index');





