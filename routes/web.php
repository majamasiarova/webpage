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


Route::get('/about', [PageController::class, 'about'])->name('page.about');
Route::get('/kontakt', [PageController::class, 'contact'])->name('page.contact');

Route::get('/odhlas', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');

Route::get('/registruj', [UserController::class, 'register'])->name('user.register');
Route::post('/vytvor-uzivatela', [UserController::class, 'create'])->name('user.create');

Route::get('/prihlas', [UserController::class, 'login'])->name('user.login');
Route::post('/skontroluj', [UserController::class, 'check'])->name('user.check');


Route::get('/zobrazit/{kategoria}', [AdController::class, 'view'])->name('ad.view');

Route::get('/pridat', [AdController::class, 'add'])->name('ad.add')->middleware('auth');
Route::post('/vytvor-inzerat', [AdController::class, 'create'])->name('ad.create')->middleware('auth');

Route::get('/moje-inzeraty',[AdController::class,'mine'])->name('ad.mine')->middleware('auth');

Route::get('/', [PageController::class, 'index'])->name('page.index');





