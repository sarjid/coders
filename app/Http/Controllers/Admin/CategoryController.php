<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }


    //store category 

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
        ]);

        Category::insert([
            'category_name' => ucwords($request->category_name),
            'created_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Category insert Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    //edit category 
    public function edit($id){
      $category = Category::findOrFail($id);
      return view('admin.category.edit',compact('category'));
    }

    //updat data 

    public function update(Request $request){
        $id = $request->id;

        $request->validate([
            'category_name' => 'required',
        ]);

        Category::findOrFail($id)->update([
            'category_name' => ucwords($request->category_name),
            'updated_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Category Update Success',
            'alert-type'=>'success'
            );
            return Redirect()->to('admin/category')->with($notification);
    }

    //delete data 

    public function delete($id){
        Category::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Category Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
