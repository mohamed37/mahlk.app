<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = ['user_id', 'ask', 'answer'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
