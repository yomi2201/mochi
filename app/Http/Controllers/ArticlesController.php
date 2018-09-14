<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index() {
        // $articles = Article::all();
        // $article = Article::orderBy('published_at','desc')->orderBy('created_at','decs')->get();
        $articles = Article::latest('published_at')->latest('created_at')
                 ->published()
                 ->get();
        return view('articles.index',compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function show($id) {
        $article = Article::findOrfail($id);
        return view('articles.show',compact('article'));
    }

    public function store(Request $request) {
        $rules = [
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date',
        ];
        $validated = $this->validate($request, $rules);
 
        Article::create($validated);
 
        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(ArticleRequest $request,$id){
        $article = Article::findOrFail($id);
        $article ->update($request->validated());
        return redirect(url('articles',[$article->id]));
    }

}
