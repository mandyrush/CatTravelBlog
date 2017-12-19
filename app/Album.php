<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function images()
    {
    	return $this->belongsToMany(Image::class);
    }
    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
