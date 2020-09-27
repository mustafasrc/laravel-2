<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    function getCount() {
        return $this->hasMany('App\Models\Product' , 'categories' ,'id');
    }
    use HasFactory;
    protected $table = 'product_categories';
}
