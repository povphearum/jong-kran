<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'description',
        'serving',
        'prep_time',
        'cook_time',
        'image',
        'video',
        'status',
        'cate_id',
        'event_id',
        'country_id',
    ];

    public function tags(){
       return $this->belongsToMany(Tag::class);
    }

    public function category(){
      return  $this->belongsTo(Category::class);
    }
}
