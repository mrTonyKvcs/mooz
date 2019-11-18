<?php

namespace App;

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * category
     *
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    //Scope

    /**
     * scopeActive
     *
     * @param mixed $query
     */
    public function scopeActive($query)
    {
        return $query->where('published_at', '<=', now()->format('Y-m-d H:i:s'));
    }

    //Accessors & Mutators

    /**
     * getPublishedAtAttribute
     *
     * @param mixed $value
     */
    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

}
