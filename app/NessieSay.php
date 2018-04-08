<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NessieSay extends Model
{
    use SoftDeletes;

    public static function getLatest()
    {
        return NessieSay::latest()->get();
    }
}
