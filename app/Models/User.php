<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Other properties and methods...
}
