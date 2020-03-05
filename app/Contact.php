<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id','phone', 'message'];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
