<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/odhlas', [UserController::class, 'logout'])->name('user.logout');

Route::get('/registruj', [UserController::class, 'register'])->name('user.register');
Route::post('/vytvor-uzivatela', [UserController::class, 'create'])->name('user.create');

Route::get('/prihlas', [UserController::class, 'login'])->name('user.login');
Route::post('/skontroluj', [UserController::class, 'check'])->name('user.check');

Route::get('/zobrazit', [AdController::class, 'view'])->name('ad.view');
Route::get('/odstranit', [AdController::class, 'delete'])->name('ad.delete');
Route::get('/pridat', [AdController::class, 'add'])->name('ad.add');

Route::get('/', [PageController::class, 'index'])->name('page.index');





