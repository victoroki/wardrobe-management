<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothingItemController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});



Route::middleware('auth:sanctum')->group(function () {
    Route::get('/clothing-items', [ClothingItemController::class, 'index']);
    Route::post('/clothing-items', [ClothingItemController::class, 'store']);
    Route::get('/clothing-items/{id}', [ClothingItemController::class, 'show']);
    Route::put('/clothing-items/{id}', [ClothingItemController::class, 'update']);
    Route::delete('/clothing-items/{id}', [ClothingItemController::class, 'destroy']);
});


require __DIR__.'/auth.php';
