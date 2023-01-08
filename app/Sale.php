<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Sale extends Authenticatable
{
    protected $guarded = [];

    public function payment() {
        return $this->belongsTo(Payment::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

}
