<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = ['created_at'];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
    public function albums()
    {
    	return $this->belongsToMany(Album::class);
    }
}
