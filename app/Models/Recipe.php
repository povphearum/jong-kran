<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function subcate(){
        $this->belongsToMany('App\Models\Subcategory');
    }

    public function cate(){
        $this->belongsTo('App\Models\Category');
    }
}
