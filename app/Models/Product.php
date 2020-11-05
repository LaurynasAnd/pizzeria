<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getVariations(){
        return $this->hasMany('App\Models\Variation','product_id', 'id' );
    }
    public function getCategory(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
