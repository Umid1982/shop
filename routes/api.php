<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('stocks', StockController::class);
    Route::get('incomes', IncomeController::class);
    Route::get('sales', SaleController::class);
    Route::get('orders', OrderController::class);
});
