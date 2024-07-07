<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//mostrar(noticias y articulos)
route::get('/news', [NewsController::class, 'index'])->name('news_show');
route::get('/article', [ArticleController::class, 'index'])->name('article_show');

//busqueda (noticias y articulos)
route::get('/news/{id}', [NewsController::class, 'show'])->name('news_find');
route::get('/article/{id}', [ArticleController::class, 'show'])->name('article_find');

//filtrar(noticias y articulos)
route::get('/news/filter/{}', function(){
    return ('filtrar una noticia');
});
route::get('/article/filter/{}', function(){
    return ('filtar un articulo');
});