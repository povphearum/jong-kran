<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function Recipe(){
        return view('admin.content.recipe.recipe');
    }

    public function AddRecipe()
    {
        return view('user.Recipe');
    }

    public function StoreRecipe(Request $request){
        $request->validate([
            'name'=>'required|unique:recipes',
            'category_id'=>'required',
        'description'=>'required',
        'serving'=>'required',
        'prep_time'=>'required',
        'cook_time'=>'required',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime,video/x-msvideo,video/x-flv|max:20480',
                        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $image = $request->file('image');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('upload/images'),$image_name);
        $img_url = 'upload/images'.$image_name;

        $video = $request->file('video');
        $video_name = hexdec(uniqid()).'.'.$video->getClientOriginalExtension();
        $request->video->move(public_path('upload/videos'),$video_name);
        $img_url = 'upload/videos'.$video_name;

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
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
