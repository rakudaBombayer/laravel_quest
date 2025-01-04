<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () { return view('home'); })->name('home');

Route::get('/article/create', function () { return view('article.create'); })->name('article.create');

Route::get('/article/edit', function () { return view('article.editarticle'); })->name('article.edit');

Route::get('/article', function () { return view('article.article'); })->name('article');