<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'sometimes'
        ]);
        $imageExtension = $request->file('image')->getClientOriginalExtension();
        $imageName = 'category_image_'.$request->input('name').'_'.time().'.'.$imageExtension;
        $imageLocation = $request->file('image')->storeAs('public/Category/Images', $imageName);
        

        $category = New Category();
        $category->name = $request->input('name');
        $category->description =  $request->input('description');
        $category->image = $imageLocation;
        $category->save();
        
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'sometimes|image',
            'description' => 'sometimes'
        ]);

        $category = Category::find($id);

        if($request->hasFile('image')){
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $imageName = 'categoryImage_'.$request->input('name').'_'.time().'.'.$imageExtension;
            $imageLocation = $request->file('image')->storeAs('public/Category/Images', $imageName);
        } else {
            $imageLocation = $category->image;
        }

        $category->name = $request->input('name');
        $category->image = $imageLocation;
        $category->description = $request->input('description');
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->route('category.index');
    }
}
