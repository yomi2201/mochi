<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        // return view('pages.about');
        // 配列に値をセット
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";
 
        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);  
    }

    public function contact(){
        // return view('pages.contact');
        // 変数に値をセット
        $first_name = "Luke";
        $last_name = "Skywalker";
 
        // view関数の第２引数に compact関数を使う
        return view('pages.about', compact('first_name', 'last_name'));
    }
}
