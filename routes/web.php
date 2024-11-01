<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class,'homepage'])->name('home');

Route::get('/index', [ArticleController::class,'index'])->name('index');
Route::get('/create', [ArticleController::class,'create'])->name('create');
Route::post('/store', [ArticleController::class,'store'])->name('store');
Route::get('/show/{article}', [ArticleController::class,'show'])->name('show');
Route::get('/edit/{article}', [ArticleController::class,'edit'])->name('edit');
Route::put('/update/{article}', [ArticleController::class,'update'])->name('update');
Route::delete('/destroy/{article}', [ArticleController::class,'destroy'])->name('destroy');
