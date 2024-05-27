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
        $article->valider= $request->valider;


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
     
        $article = Article::find($request->id);

        // if ($article) {
            $article->nom = $request->nom;
            $article->description = $request->description;
            $article->date_creation = $request->date_creation;
            $article->photo = $request->photo;
            $article->valider= $request->valider;

            $article->update();
    
            return redirect('/article')->with('status', 'L\'article a bien été modifié avec succès.');
        // } else {
        //     // Gérez le cas où l'article n'a pas été trouvé
        //     return redirect('/article')->with('status', 'L\'article à mettre à jour n\'a pas été trouvé.');
        // }
    
    }
}
