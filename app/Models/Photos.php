<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    function getPhotos () {
        return $this->hasOne('App\Models\Albumcategories' , 'id' , 'category');
    }
    use HasFactory;

}
