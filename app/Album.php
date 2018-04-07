<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'cover_photo'
    ];

    public function photos()
    {
    	return $this->belongsToMany(Photo::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
