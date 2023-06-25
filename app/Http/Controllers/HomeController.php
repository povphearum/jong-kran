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

        $comments = Review::where('recipe_id',$id)->get();

        return view('user.fullrecipe', compact('recipe','comments'));
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

    public function RemoveReview($id){
        Review::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Your Review has been deleted!');
    }

    public function EditReview($id){
        $reviewinfo =Review::findOrFail($id);
        return view('user.editcomment', compact('reviewinfo'));
    }

    public function UpdateReview(Request $request){
        $comment_id = $request->id;
        $user = Auth::user()->id;
        $request->validate([
            'comment'=>'required',
            'rating'=>'required',
        ]);
        Review::findOrFail($comment_id)->update([
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);
        return redirect()->route('full-recipe')->with('message','The comment Updated Successfully!');

    }

public function SearchRecipe(){
    $search_text = request()->input('search');
    $recipes = Recipe::where('recipe_name', 'LIKE', '%' . $search_text . '%')->get();
        return view('user.search',compact('recipes','search_text'));
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




}
