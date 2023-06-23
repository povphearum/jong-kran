<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_name',
        'category_display_name'
    ];
    public function tags(){
      return  $this->hasMany(Tag::class);
    }
    public function recipe(){
      return  $this->hasMany(Recipe::class);
    }
}
