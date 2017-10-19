<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
    
    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }
}
