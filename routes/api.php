<?php

use App\Http\Controllers\Api\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(ScoreController::class)->prefix("scores")->group(function(){
    Route::get("update-score","updateScore");
});
