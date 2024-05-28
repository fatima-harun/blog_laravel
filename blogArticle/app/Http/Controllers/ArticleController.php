<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function liste_article(){
        $articles = Article::all();
        return view('acceuil', compact('articles'));
    }
    public function ajout_article(){
        return view('ajout');
    }
    public function ajout_article_traitement(Request $request){
      //  dd($request->all());
          $request->validate([
            'titre'=>'required',
            'description'=>'required',
            'date'=>'required',
            'popularite'=>'required',
          ]);

        $article = new Article();
        // liaison des informations des différents champs de Article
        $article->image = $request->image;
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->date = $request->date;
        $article->popularite = $request->popularite;
        $article->save();
        return redirect('/Article')->with('success', 'article Modifié avec succès');
    }
}
