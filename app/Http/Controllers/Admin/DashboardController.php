<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Recipe;
use App\Models\Review;
use App\Models\User;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index(){
        $recipe = Recipe::count();
        $users = User::count();
        $comments = Review::count();
        $feedback = Feedback::count();
        return view('admin.content.main',compact('recipe','users','comments','feedback'));

    }
}
