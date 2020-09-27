<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albumcategories extends Model
{
    function getCountPhoto() {
        return $this->hasMany('App\Models\Photos' ,'category' ,'id');
    }
    use HasFactory;
}
