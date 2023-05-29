<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subcate(){
        $this->hasOne('App\Models\subcategory');
    }
    public function recipe(){
        $this->hasMany('App\Models\Recipe');
    }
}
