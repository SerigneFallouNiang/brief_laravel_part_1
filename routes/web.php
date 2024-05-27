<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [ArticleController::class, 'index']);

Route::get('/ajouter', [ArticleController::class, 'ajouter_article']);
Route::post('/ajouter/traitement', [ArticleController::class, 'ajouter_article_traitement']);

Route::get('/delete-article/{id}', [ArticleController::class, 'delete_article']);

Route::get('/update-article/{id}', [ArticleController::class, 'update_article']);
Route::post('/update/traitement', [ArticleController::class, 'update_article_traitement']);






