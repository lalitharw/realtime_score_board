<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return redirect()->route("admin.login.page");
});

Route::prefix("admin")->name("admin.")->group(function(){
    Route::controller(LoginController::class)->prefix("login")->name("login.")->group(function(){
        Route::get("/","login")->name("page");
    });

    Route::controller(AuthController::class)->prefix("auth")->name("auth.")->group(function(){
        Route::post("login","login")->name("login");
    });
});
