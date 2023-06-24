<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=[
        'tag_name',
        'tag_display_name',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);

    }
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'tag_recipes', 'tag_id', 'recipe_id');
    }
}
