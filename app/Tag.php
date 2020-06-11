<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug', 'name'
    ];

    // Relationships
    public function articles()
    {
        $this->belongsToMany(Article::class);
    }
}
