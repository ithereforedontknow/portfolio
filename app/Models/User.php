<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'about',
        'height',
        'weight',
        'birthdate',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
