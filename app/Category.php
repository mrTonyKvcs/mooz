<?php

namespace App;

use App\Article;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'slug', 'name' ];

    //relationships

    /**
     * articles
     *
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

}
