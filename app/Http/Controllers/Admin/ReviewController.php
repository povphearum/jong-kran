<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function Comment(){
        return view('admin.content.comment');
    }


    public function Review(){
        return view('admin.content.reviews');
    }

    public function FeedBack(){
        $feedbacks = Feedback::get();
        return view('admin.content.review.feedback',compact('feedbacks'));
    }

    public function Question(){
        $questions = Question::get();
        return view('admin.content.review.question',compact('questions'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
