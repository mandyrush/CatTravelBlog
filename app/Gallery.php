<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['created_at'];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
