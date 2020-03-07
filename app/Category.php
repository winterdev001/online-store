<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // relationship of category to product
    public function products(){
        return $this->hasMany('App\Product');
    }
}
