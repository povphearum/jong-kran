<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'first_name',
        'last_name',
        'age',
        'phone_number',
        'date_birth',
        'country',
        'city',
        'zip_code',
    ];

    public function thisuser(){
        $this->belongsTo('App\Models\User');
    }
}
