<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {
        return view('blogs.index');
    }
}
