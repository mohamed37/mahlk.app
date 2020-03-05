<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image', 'fullname',
    ];

    public function getImagePathAttribute()
    {
        return asset('uploads/users_images/'. $this->image);
    }

    public function asks()
    {
        return $this->hasMany("App\Ask");
    }

    public function posts()
    {
        return $this->hasMany("App\Post");
    }

    public function comments()
    {
        return $this->hasMany("App\Comment");
    }

    public function profile()
    {
        return $this->hasOne("App\Profile");
    }


    public function contacts()
    {
        return $this->hasMany("App\Contact");
    }

    public function feadbacks()
    {
        return $this->hasMany("App\Feadback");
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
