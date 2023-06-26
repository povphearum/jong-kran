<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function Info($id){
        $user = User::findOrFail($id);
        return view('user.user_profile.profile', compact('user'));
    }

    public function __invoke(){
        return view('user.user_profile.profile');
    }
}
