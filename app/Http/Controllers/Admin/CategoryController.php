<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category(){
        $categories = Category::get();
        return view('admin.content.category.category',compact('categories'));
    }

    public function AddCategory(){
        return view('admin.content.category.addcategory');
    }

    public function StoreCategory(Request $request){
            $request->validate([
                'category_name'=>'required|unique:categories',
                'category_display_name'=>'required|unique:categories'
            ]);

            Category::insert([
                'category_name' => $request->category_name,
                'category_display_name'=>$request->category_display_name,


            ]);
            return redirect()->route('category')->with('message','Category Added Successfully!');
    }

    public function UpdateCategory($id){
        $category = Category::findOrFail($id);
        return view('admin.content.category.updatecategory',compact('category'));

    }

    public function EditCategory(Request $request){
        $category_id = $request->id;

        $request->validate([
            'category_name'=> 'required|unique:categories',
            'category_display_name'=> 'required|unique:categories'
        ]);
        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'category_display_name' => $request->category_display_name,
        ]);
        return redirect()->route('category')->with('message','Category Updated Successfully!');
    }

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('category')->with('message','Category Delete Successfully');

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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
