<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['created_at'];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
