<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getCategory', [App\Http\Controllers\api\DataController::class, 'getCategory']);
Route::get('getMerk', [App\Http\Controllers\api\DataController::class, 'getMerk']);
Route::get('getProduct', [App\Http\Controllers\api\DataController::class, 'getProduct']);
Route::get('getProductByMerk/{id}', [App\Http\Controllers\api\DataController::class, 'getProductByMerk']);
Route::get('getProductById/{id}', [App\Http\Controllers\api\DataController::class, 'getProductById']);
Route::get('getProductByPromo/{promo}', [App\Http\Controllers\api\DataController::class, 'getProductByPromo']);
Route::get('getCategoryName/{id}', [App\Http\Controllers\api\DataController::class, 'getCategoryName']);
Route::get('testData', [App\Http\Controllers\api\DataController::class, 'testData']);

Route::get('getkelompokindikator', [App\Http\Controllers\api\DataController::class, 'getKI']);

Route::post('getlist-hasil', [App\Http\Controllers\api\DataController::class, 'getIndikatorList']);
