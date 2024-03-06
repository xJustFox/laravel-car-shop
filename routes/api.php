<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;

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

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{slug}', [CarController::class, 'show']);
Route::get('/cars/brand/{slug}', [CarController::class, 'brand_cars']);

Route::get('/brands', [CarController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
