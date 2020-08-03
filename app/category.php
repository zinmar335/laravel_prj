<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receipe;

class Category extends Model
{
    protected $table    = "category";

    /**
     * Get the comments for the blog post.
     */
    public function receipe()
    {
        return $this->hasMany(Receipe::class);
    }
}
