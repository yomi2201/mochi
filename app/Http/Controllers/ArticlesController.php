<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function show($id) {
        $article = Article::findOrfail($id);
        return view('articles.show',compact('article'));
    }

    public function store(Request $request) {  // ①
        $rules = [    // ②
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date',
        ];
        $validated = $this->validate($request, $rules);  // ③
 
        Article::create($validated);
 
        return redirect('/');
    }

}
