<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;



//mostrar(noticias y articulos)
route::get('/news', [NewsController::class, 'index'])->name('news_show');
route::get('/article', [ArticleController::class, 'index'])->name('article_show');

//filtrar(noticias y articulos)
route::post('/news/filter/{name}', [NewsController::class, 'filtro'])->name('news_filtro');
route::post('/article/filter/{name}', [ArticleController::class, 'filter'])->name('article_filter');