<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; // 呼び出すコントローラーはuse宣言する
use App\Http\Controllers\PagesController;

// WelcomeController
Route::get('/', [WelcomeController::class, 'index']);
Route::get('contact', [PagesController::class, 'contact']);
Route::get('about', [PagesController::class, 'about']);
