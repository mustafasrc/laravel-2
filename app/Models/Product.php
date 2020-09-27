<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function getCategory () {
        return $this->hasOne('App\Models\ProductCategories' , 'id' , 'categories');
    }
    use HasFactory;
    protected $table = 'products';
}
