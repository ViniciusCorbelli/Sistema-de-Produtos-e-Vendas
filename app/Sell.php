<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Sell extends Authenticatable
{
    protected $guarded = [];
    protected $table = 'sales';
}
