<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Article',[ArticleController::class, 'liste_article']);
Route::get('/edit-article/{id}',[ArticleController::class, 'edit_article']);
Route::patch('edit/traitement',[ArticleController::class, 'edit_article_traitement']);
Route::get('/add',[ArticleController::class, 'ajout_article']);
Route::post('ajouter/traitement',[ArticleController::class, 'ajout_article_traitement']);
Route::delete('/article/{id}',[ArticleController::class,'supp_article']);
