<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;



class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view ('articles.index' , compact('articles'));
    }

    public function ajouter_article()
    {
        return view('articles.ajouter');
    }

    public function ajouter_article_traitement(Request $request)
    {
     
        

        $article = new Article();
        $article->nom=$request->nom;
        $article->description=$request->description;
        $article->date_création=$request->date_création;
        $article->photo=$request->photo;

        $article->save();

        return redirect('/ajouter')->with('status','L\'article a bien été ajouté avec succes.');
    }

    public function delete_article($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('/article')->with('status','L\'article a bien été supprimé avec succes.');
    }

    public function update_article($id){
            $article=Article::find($id);
            return view ('articles.update', compact('article') );
    }

    public function update_article_traitement(Request $request){
     
        $articles =Article::find($request->id);
        dd($articles->all());
        $article->nom=$request->nom;
        $article->description=$request->description;
        $article->date_création=$request->date_création;
        $article->photo=$request->photo;
        $article->update();

        return redirect('/article')->with('status','L\'article a bien été modifier avec succes.');
    }
}
