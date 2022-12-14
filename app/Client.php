<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
