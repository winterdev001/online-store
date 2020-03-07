<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    // relationship of field to product
    public function products(){
        return $this->hasMany('App\Product');
    }
}
