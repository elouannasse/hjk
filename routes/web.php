<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/article',[ArticleController::class,'index']);
Route::get('/article/create',[ArticleController::class,'create']);
Route::post('/article',[ArticleController::class,'store']);
Route::get('login',[AuthController::class,'showLoginForm']);
Route::post('login',[AuthController::class,'login']);






