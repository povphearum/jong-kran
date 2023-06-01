<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function Tags(){
        $tags = Tag::with('category')->get();
        return view('admin.content.tag.tags',compact('tags'));
    }

    public function AddTag(){
        $categories = Category::get();

        return view('admin.content.tag.addtag',compact('categories'));
    }

    public function StoreTag(Request $request){
        $request->validate([
            'name'=>'required|unique:tags',
            'category_id'=>'required'
        ]);
            $category_id = $request->category_id;
        Tag::create([
            'name'=>$request->name,
            'display_name'=>$request->display_name,
            'category_id'=>$category_id,
        ]);
        Category::where('id', $category_id)->increment('tag_count',1);
        return redirect()->route('tag')->with('message','Tag Added Successfully!');

    }

    public function UpdateTag($id){
        $tag = Tag::findOrFail($id);
        return view('admin.content.tag.updatetag',compact('tag'));

    }

    public function EditTag(Request $request){
        $tag_id = $request->id;

        $request->validate([
            'name'=> 'required|unique:tags',
            'display_name'=> 'required|unique:tags'
        ]);
        Tag::findOrFail($tag_id)->update([
            'name' => $request->name,
            'display_name' => $request->display_name,
        ]);
        return redirect()->route('tag')->with('message','Tag Updated Successfully!');
    }

    public function DeleteTag($id){
        $cat_id = Tag::where('id', $id)->value('category_id');
        Tag::findOrFail($id)->delete();
        Category::where('id', $cat_id)->decrement('tag_count',1);
        return redirect()->route('tag')->with('message','Tag Deleted Successfully!');

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
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subcategory $subcategory)
    {
        //
    }
}
