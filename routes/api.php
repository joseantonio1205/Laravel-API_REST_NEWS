<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//mostrar(noticias y articulos)
route::get('/news', [NewsController::class, 'index'])->name('news_show');
route::get('/article', [ArticleController::class, 'index'])->name('article_show');

//busqueda (noticias y articulos)
route::get('/news/{id}', function(){
    return ('busqueda de una noticia');
});
route::get('/article/{id}', function(){
    return ('busqueda de un articulo');
});

//filtrar(noticias y articulos)
route::get('/news/filter/{}', function(){
    return ('filtrar una noticia');
});
route::get('/article/filter/{}', function(){
    return ('filtar un articulo');
});