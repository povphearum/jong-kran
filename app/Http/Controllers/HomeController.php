<?php

namespace App\Http\Controllers;


use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $user=Auth::user();

        if($user->hasRole('admin') || $user->hasRole('manager'))
        {
            return view('admin.content.main');
        }
        elseif ($user->hasRole('user')){
            return view('user.main');
        }
        else{
            return view('admin.content.main');
        }
    }
    public function index()
    {
        $recipes = Recipe::get();
        return view('user.main',compact('recipes'));
    }


    public function about()
    {
        return view('user.about');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function fullrecipe()
    {
        return view('user.fullrecipe');
    }
    public function elements()
    {
        return view('user.elements');
    }

    public function england()
    {
        return view('user.England');
    }
    public function germany()
    {
        return view('user.Germany');
    }
    public function italy()
    {
        return view('user.Italy');
    }
    public function france()
    {
        return view('user.France');
    }
    public function cam()
    {
        return view('user.Cambodia');
    }
    public function viet()
    {
        return view('user.Vietnam');
    }
    public function thai()
    {
        return view('user.Thailand');
    }
    public function loa()
    {
        return view('user.Loa');
    }
    public function indo()
    {
        return view('user.Indonesia');
    }
    public function us()
    {
        return view('user.US');
    }
    public function canada()
    {
        return view('user.Canada');
    }
    public function mexico()
    {
        return view('user.Mexico');
    }
    public function profile()
    {
        return view('user.Profile');
    }

    public function out()
    {
        return view('user.Out');
    }

    public function Info(){
        return view('user.user_profile.profile');
    }



}
