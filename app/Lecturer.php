<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;

class Lecturer extends Authenticatable
{
    use HasApiTokens, Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'lecturer';

    protected $fillable = [
        'Fname', 'Lname', 'email', 'password', 'subdomain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
