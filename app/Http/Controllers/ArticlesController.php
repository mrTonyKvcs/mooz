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
        $articles = Article::active()->paginate(10);

        return view('articles.index', compact('articles'));
    }

    /**
     * show
     *
     */
    public function show()
    {
        return view('articles.show');
    }
}
