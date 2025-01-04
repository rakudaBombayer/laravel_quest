<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;



// ArticlesControllerを使ったルート設定
Route::get('/', [ArticlesController::class, 'index'])->name('home');
Route::get('/article/create', [ArticlesController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticlesController::class, 'store'])->name('article.store');
Route::get('/article/{id}', [ArticlesController::class, 'show'])->name('article.show');
Route::get('/article/{id}/edit', [ArticlesController::class, 'edit'])->name('article.edit'); 
Route::post('/article/{id}/update', [ArticlesController::class, 'update'])->name('article.update');
Route::delete('/article/{id}/delete', [ArticlesController::class, 'destroy'])->name('article.destroy');