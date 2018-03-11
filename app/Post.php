<?php

namespace App;

use Carbon\Carbon;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

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
    public function scopefilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
