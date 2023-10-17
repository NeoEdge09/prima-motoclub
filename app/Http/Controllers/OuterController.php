<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class OuterController extends Controller
{
    public function article_page()
    {
        $articles = Article::get();
        return view('showArticles/index', ['articles' => $articles]);
    }

    public function show_article($id)
    {
        $article = Article::find($id);
        return view('showArticles/detail', ['article' => $article]);
    }

    public function show_galleryphoto_article()
    {

        $articles = Article::get();
        return view('gallery', ['articles' => $articles]);
    }
}
