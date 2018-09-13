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

    public function store() {
        // ① フォームの入力値を取得
        $inputs = \Request::all();
 
        // ② デバッグ： $inputs の内容確認
        // dd($inputs);
        Article::create($inputs);
        // ② 記事一覧へリダイレクト
        return redirect('/');
        //url CHOISE
    }

    // public function edit($id) {
    //     $article = Article::findOrfail($id);
    //     return view('articles.show',compact('article'));
    // }

    // public function delete($id) {
    //     $article = Article::findOrfail($id);
    //     return view('articles.show',compact('article'));
    // }
}
