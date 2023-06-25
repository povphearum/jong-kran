<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=[
        'user_id',
        'recipe_id',
        'comment',
        'rating'
    ];

    use HasFactory;

public function user_review(){
    return $this->belongsTo(User::class,'user_id');
}
}
