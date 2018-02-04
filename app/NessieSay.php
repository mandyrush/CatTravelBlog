<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NessieSay extends Model
{

    public static function getLatest()
    {
        return NessieSay::latest()->get();
    }
}
