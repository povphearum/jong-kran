<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Recipe;
use App\Models\Review;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }

        public function User(){
          $users = Auth::user();
          $users = User::get();
            return view('admin.content.user.user',compact('users'));
        }

        public function UserShow($id){
        $user = User::findOrFail($id);
        $recipe = Recipe::where('user_id',$id)->count();
        $comment = Review::where('user_id',$id)->count();
        return view('admin.content.user.singleuser',compact('user','recipe','comment'));

        }

}
