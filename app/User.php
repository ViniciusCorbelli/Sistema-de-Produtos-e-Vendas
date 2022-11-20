<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];

    public function clients() {
        return $this->belongsToMany(Client::class);
    }

    public function provider() {
        return $this->belongsToMany(Provider::class);
    }

}
