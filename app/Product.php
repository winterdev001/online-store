<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // relationship of product to category and category
    public function product_cat(){
        return $this->belongsTo('App\Category');
    }

    // relationship of product to field and category
    public function product_field(){
        return $this->belongsTo('App\Field');
    }
}
