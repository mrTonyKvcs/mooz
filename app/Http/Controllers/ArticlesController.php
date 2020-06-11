<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {
        $articles = Article::active()
            ->paginate(9);

        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::slug($slug)
            ->first();

        return view('articles.show', compact('article'));
    }
}
