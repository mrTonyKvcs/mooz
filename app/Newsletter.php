<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * fillable
     *
     * @var string
     */
    protected $fillable = [ 'email' ];
}
