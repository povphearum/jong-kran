<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        return view('admin.content.user.singleuser',compact('user'));

        }

}
