<?php

namespace App\Models;

use App\Http\Livewire\Ingredients;
use App\Http\Livewire\Steps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'recipe_name',
        'recipe_description',
        'serving',
        'prep_time',
        'prepMHD',
        'cook_time',
        'cookMHD',
        'image',
        'video',
        'Note',
        'status',
        'event_id',
        'country_id',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_recipes','tag_id','recipe_id');
    }

    public function ingredients(){
        return $this->hasMany(Ingredients::class);
    }


    public function steps(){
        return $this->hasMany(Steps::class);
    }

    public function category(){
      return  $this->belongsTo(Category::class);
    }
}
