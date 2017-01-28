<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Sentinel\Models\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relationship with resume
     * @return  relationship
     */
    public function resumes()
    {
        return $this->hasMany('App\Resume');
    }

    /**
     * [favorites description]
     * @return [type] [description]
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Resume', 'employer_favorites', 'employer_id', 'resume_id');
    }
}
