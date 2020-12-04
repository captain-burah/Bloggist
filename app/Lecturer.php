<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


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
        'fname', 'lname', 'email', 'password', 'regStatus', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    public function lecturerInfo()
    {
        return $this->hasOne('App\LecturerInfo', 'lec_email', 'email');
    }
}
