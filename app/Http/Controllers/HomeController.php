<?php

namespace App\Http\Controllers;


use App\Models\Recipe;
use App\Models\Review;
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
            $recipes = Recipe::get();
            return view('user.main',compact('recipes'));
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
    public function FullRecipe($id)
    {
        $recipe =Recipe::findOrFail($id);

        return view('user.fullrecipe', compact('recipe'));
    }

public function StoreReview(Request $request){
    $comment = $request->comment;
    $rating = $request->rating;
    Review::create([
        'recipe_id'=> $request->recipe_id,
        'user_id'=>Auth::id(),
        'comment'=>$request->comment,
        'rating'=>$rating,]);
    return redirect()->back();

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
