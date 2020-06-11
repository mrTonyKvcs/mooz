<?php

namespace App;

use App\Tag;
use App\Article;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'content',
        'rank',
        'published_at',
        'og_title',
        'og_description',
        'image_path'
    ];

    //Relationships

    /**
     * category
     *
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * tag
     *
     */
    public function tags()
    {
        $this->belongsToMany(Tag::class);
    }

    //Accessor
    /**
     * getPublishedAtAttribute
     *
     * @param mixed $value
     */
    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }


    //Scopes
    /**
     * scopeActive
     *
     * @param mixed $query
     */
    public function scopeActive($query)
    {
        return $query->where('published_at', '<=', now());
    }

    /**
     * scopeSlug
     *
     * @param mixed $query
     */
    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
