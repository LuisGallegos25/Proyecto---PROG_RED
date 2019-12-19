<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    public function producto()
    {
        return $this->hasMany('App\Product');
    }
}
