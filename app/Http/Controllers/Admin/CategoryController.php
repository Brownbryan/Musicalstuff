<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.categories.index',compact('category'));
    }
    public function create(){
        return view('admin.categories.create');
    }
    public function insert(Request $request){
     

        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();//getting image extension
            $filename = time().'.'.$ext;
            $file->move('uploads/new_uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')==true?'1':'0';
        $category->popular = $request->input('popular')==true?'1':'0';
        $category->title = $request->input('title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();


        return redirect()->route('categories.index')->with('success','Category Added Successfully');

    }   
    public function edit($id){
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }
}
