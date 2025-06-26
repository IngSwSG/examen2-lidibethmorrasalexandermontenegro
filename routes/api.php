<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::middleware('api')->group(function () {
    Route::post('/materials', [MaterialController::class, 'store']);
    Route::put('/materials/{id}', [MaterialController::class, 'update']);
    Route::get('/materials', [MaterialController::class, 'index']);
});
