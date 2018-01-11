<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function photos()
    {
    	return $this->belongsToMany(Photo::class);
    }
    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
