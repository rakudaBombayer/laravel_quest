<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

// 不要なルートを削除
/*
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () { return view('home'); })->name('home');

// Route::get('/article/create', function () { return view('article.create'); })->name('article.create');

// Route::get('/article/edit', function () { return view('article.editarticle'); })->name('article.edit');

// Route::get('/article', function () { return view('article.article'); })->name('article');
// */

// ArticlesControllerを使ったルート設定
Route::get('/', [ArticlesController::class, 'index'])->name('home');
Route::get('/article/create', [ArticlesController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticlesController::class, 'store'])->name('article.store');
Route::get('/article/{id}', [ArticlesController::class, 'show'])->name('article.show');