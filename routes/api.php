<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExpensesController;
use App\Http\Controllers\Api\IncomesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('incomes', [IncomesController::class, 'index']);
Route::post('incomes', [IncomesController::class, 'store']);
Route::get('incomes/{id}', [IncomesController::class, 'show']);
Route::put('incomes/{id}', [IncomesController::class, 'update']);
Route::delete('incomes/{id}', [IncomesController::class, 'destroy']);

Route::get('expenses', [ExpensesController::class, 'index']);
Route::post('expenses', [ExpensesController::class, 'store']);
Route::get('expenses/{id}', [ExpensesController::class, 'show']);
Route::put('expenses/{id}', [ExpensesController::class, 'update']);
Route::delete('expenses/{id}', [ExpensesController::class, 'destroy']);
