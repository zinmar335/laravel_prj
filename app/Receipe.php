<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = array('name', 'ingredients', 'category');
    protected $table    = "receipe";
    // protected $guarded  = [];
}
