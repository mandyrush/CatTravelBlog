<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    // Changes primary id to name
    public function getRouteKeyName()
    {
        return 'name';
    }
}
