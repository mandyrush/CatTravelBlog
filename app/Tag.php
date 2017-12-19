<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    // Changes primary id to name
    public function getRouteKeyName()
    {
        return 'name';
    }
}
