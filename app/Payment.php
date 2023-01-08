<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Payment extends Authenticatable
{
    protected $guarded = [];

    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
