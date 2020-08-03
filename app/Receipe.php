<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Receipe extends Model
{
    protected $fillable = array('name', 'ingredients', 'category', 'user_id');
    protected $table    = "receipe";
    // protected $guarded  = [];

    /**
     * Get the user that owns the phone.
     */
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
