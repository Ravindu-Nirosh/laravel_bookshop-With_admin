<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Category_view(){

        $category=Category::latest()->get();
        return view('backend.category.category_view',compact('category'));
    }

    public function InsertCategory(Request $request){

        $request->validate([
            'cat_name' => 'required',  
        ],
        [
            'cat_name.required' => 'Input Name',
        ]);

        Category::insert([

            'cat_name' => $request->cat_name,
            
        ]);

        $notification =array(
            'message' => 'Category Added Successfuly',
            'alert-type' =>'success'
        );

        return back()->with( $notification);
        


    }

    public function Category_Edit_view($id){

        $categories = Category::findOrFail($id);

        return view('backend.category.category_edit',compact('categories'));

    }

    public function Category_Edit_create(Request $request){

        $category_id = $request->id;

        Category::findOrFail($category_id)->update([

            'cat_name' => $request->cat_name,
            
        ]);

        $notification =array(
            'message' => 'Category Added Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('all.brand')->with($notification);

    }

    public function Category_delete($id){

        Category::findOrFail($id)->delete();
        
        $notification =array(
            'message' => 'Category Deleted Successfuly',
            'alert-type' =>'info'
        );

        return back()->with( $notification);

    }

    


}
