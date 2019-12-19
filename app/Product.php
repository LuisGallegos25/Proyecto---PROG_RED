<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'proveedor_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
}
