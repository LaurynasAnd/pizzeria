<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    public function getSize()
    {
        return $this->belongsTo('App\Models\Size', 'size_id', 'id');
    }
}
