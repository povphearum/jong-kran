<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=[
      'user_id',
      'feedback',
    ];
    use HasFactory;

    public function feedback_user(){
        return $this->belongsTo(User::class);
    }
}
