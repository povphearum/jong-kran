<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable=[
      'recipe_id',
      'step'
    ];
    use HasFactory;

    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }
}
