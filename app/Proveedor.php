<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function producto()
    {
        return $this->hasMany('App\Product');
    }
}
