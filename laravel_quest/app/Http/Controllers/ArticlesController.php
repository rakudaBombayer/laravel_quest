<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->content = $request->content;
        $article->tags = $request->tags;
        $article->save();

        return redirect()->route('home');
    }

    public function show($id) {
         $article = Article::findOrFail($id); return view('article.show', compact('article')); 
        }

        public function edit($id) 
        { 
            $article = Article::findOrFail($id); 
            return view('article.edit', compact('article')); 
        } 
        
        public function update(Request $request, $id) 
        { 
            $article = Article::findOrFail($id); 
            $article->title = $request->title; 
            $article->subtitle = $request->subtitle; 
            $article->content = $request->content; 
            $article->tags = $request->tags; 
            $article->save(); 
            
            return redirect()->route('home');
        }
        
}