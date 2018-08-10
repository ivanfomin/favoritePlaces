<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $guarded = [];

    public function place()
    {
        return $this->belongsTo('place');
    }
}
