<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];

    public function client() {
        return $this->belongsTo(Client::class, 'clients');
    }

    public function provider() {
        return $this->belongsTo(Provider::class, 'providers');
    }

}
