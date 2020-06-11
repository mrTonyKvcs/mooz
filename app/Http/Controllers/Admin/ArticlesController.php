<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    /**
     * store
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $request['slug'] = Str::slug($request->title);
        $request['image_path'] = $this->imageUploadArticle($request->all());

        $article = Article::create($request->all());

        return back()->with('success','Sikeres feltöltés!');
    }

    /**
     * imageUploadArticle
     *
     * @param mixed $request
     */
    public function imageUploadArticle($request)
    {
        $image = $request['image'];
        $fileName   = $request['slug'] . '.' . $image->getClientOriginalExtension();

        $img = Image::make($image->getRealPath());
        $img->stream(); // <-- Key point

        $rs = \Storage::disk('local')->put('public/articles' . '/' . $fileName, $img, 'public');

        return '/articles/' . $fileName;
    }
}
