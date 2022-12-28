<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];

    public function clients() {
        return $this->hasOne(Client::class, 'clients');
    }

    public function provider() {
        return $this->hasOne(Provider::class, 'providers');
    }

}
