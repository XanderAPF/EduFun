<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;


Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('article/{id}', [ArticleController::class, 'show'])->name('detail.show');
Route::get('writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('writers/{id}', [WriterController::class, 'show'])->name('writers.show');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('popular', [ArticleController::class, "popular"])->name('popular');
