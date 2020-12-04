<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class LecturerInfo extends Model
{
    protected $table = 'lecturer_infos';
    protected $fillable = 
    [
        'lec_email', 'bio', 'gender', 'contact', 'dob', 'profession', 'experience', 
        'qualifications', 'school', 'achievements','address01', 'address02', 
        'address03', 'address04'
    ];

    public function lecturer()
    {
        return $this->belongsTo('App\Lecturer', 'lec_email');
    }
}
