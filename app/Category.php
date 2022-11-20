<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
