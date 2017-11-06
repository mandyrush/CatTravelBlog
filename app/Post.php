<?php

namespace App;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addComment($body)
    {
        $user_id = Auth::user()->id;
    	$this->comments()->create(compact('body', 'user_id'));
    }
}
