<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {
        return view('admin.articles.index');
    }

    /**
     * create
     *
     */
    public function create()
    {
        return view('admin.articles.create');
    }
}
