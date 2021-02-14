<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/upravit/{ad}',[AdController:: class, 'update'])->name('ad.edit');
Route::get('/odstranit/{ad}', [AdController::class, 'delete'])->name('ad.delete');
