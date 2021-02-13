<?php

use App\Http\Controllers\AdController;
use Illuminate\Http\Request;
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
Route::get('/odstranit/{ad}', [AdController::class, 'delete'])->name('ad.delete');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
