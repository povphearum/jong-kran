<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Tag;
use App\Models\TagRecipe;
use Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function Recipe(){
        return view('admin.content.recipe.recipe');
    }

    public function AddRecipe()
    {
        $tags = Tag::get();
        return view('user.Recipe',compact('tags'));
    }

    public function StoreRecipe(Request $request){
        $user = Auth::id();

        $validatedData = $request->validate([
            'recipe_name' => 'required|unique:recipes',
            'category_id' => 'required',
            'description' => 'required',
            'serving' => 'required',
            'prep_time' => 'required',
            'cook_time' => 'required',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime,video/x-msvideo,video/x-flv|max:20480',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:tags,id',
            'ingredient_name' => 'required',
            ]);

        $image = $request->file('image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images'), $image_name);
        $img_url = 'upload/images/' . $image_name;

        $video = $request->file('video');
        if ($video) {
            $video_name = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('upload/videos'), $video_name);
            $mp4_url = 'upload/videos/' . $video_name;
        } else {
            $mp4_url = null;
        }

        $event_id = $request->event_id;
        $country_id = $request->country_id;

        $recipeData = [
            'user_id' => $user,
            'recipe_name' => $request->recipe_name,
            'description' => $request->description,
            'serving' => $request->serving,
            'prep_time' => $request->prep_time,
            'cook_time' => $request->cook_time,
            'image' => $img_url,
            'video' => $mp4_url,
            'event_id' => $event_id,
            'country_id' => $country_id,
        ];

        $recipe = Recipe::create($recipeData);

        if (!empty($validatedData['tags'])) {
            $recipe->tags()->attach($validatedData['tags']);
        }

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
