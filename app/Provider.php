<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Provider extends Authenticatable
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
