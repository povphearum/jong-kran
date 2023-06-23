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
            'recipe_description' => 'required',
            'serving' => 'required',
            'prep_time' => 'required',
            'cook_time' => 'required',
            'cookMHD' => 'required',
            'prepMHD' => 'required',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime,video/x-msvideo,video/x-flv|max:20480',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:tags,id',
//            'ingredients' => 'nullable|array',
//            'ingredients.*' => 'string|exists:ingredients,id',
//            'steps' => 'nullable|array',
//            'steps.*' => 'string|exists:steps,id',
            ]);

        $image = $request->file('image');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('upload/images'),$image_name);
        $img_url = 'upload/images'.$image_name;

        $video = $request->file('video');
        if ($video) {
            $video_name = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
            $request->video->move(public_path('upload/videos'), $video_name);
            $mp4_url = 'upload/videos/' . $video_name;
        } else {
            $mp4_url = null;
        }

        $event_id = $request->event_id;
        $country_id = $request->country_id;

        $recipeData = [
            'user_id' => $user,
            'recipe_name' => $request->recipe_name,
            'recipe_description' => $request->description,
            'serving' => $request->serving,
            'prep_time' => $request->prep_time,
            'cook_time' => $request->cook_time,
            'image' => $img_url,
            'video' => $mp4_url,
            'Note'=>$request->note,
            'event_id' => $event_id,
            'country_id' => $country_id,
        ];

        $recipe = Recipe::create($recipeData);

        if (!empty($validatedData['tags'])) {
            $recipe->tags()->attach($validatedData['tags']);
        }

        foreach ($request->ingredients as $ingredient) {
            $recipe->ingredients()->attach(['ingredient_name'=>$ingredient['ingredient_name']]);
        }

        foreach ($request->steps as $step) {
            $recipe->steps()->attach(['step'=>$step['step']]);
        }

        return redirect()->route('recipe')->with('message','recipe add successfully');

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
