<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('hw')->group(function (){
    Route::get('/user',[UserController::class,'user']);
    Route::get('/product',[UserController::class,'product']);
    Route::get('/category',[UserController::class,'category']);
});
