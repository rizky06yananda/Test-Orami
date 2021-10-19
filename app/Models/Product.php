<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $table = 'produck';

    public function product(){
        return $this->hasOne('App\Product');
    }
}
