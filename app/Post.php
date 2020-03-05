<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'image', 'content', 'location','user_id','category_id'];

    public function getImagePathAttribute()
    {
        return asset('uploads/posts_images/'. $this->image);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany("App\Comment");
    }
}
