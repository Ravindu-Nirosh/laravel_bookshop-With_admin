<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class Subcategorycontroller extends Controller
{
    public function SubCategory_view(){

        $category=Category::orderBy('cat_name','ASC')->get();
        $subcategory=SubCategory::latest()->get();
        return view('backend.subcategory.sub_cat_view',compact('subcategory','category'));
    }

    public function SubCategory_insert(Request $request){

        $request->validate([
            'category_id' => 'required',  
            'sub_cat_name' =>'required',
        ],
        [
            'sub_cat_name.required' => 'Name field is required',
            'category_id' => 'Select category'
        ]);

        SubCategory::insert([

            
            
            'category_id' => $request->category_id,
            'sub_cat_name' => $request->sub_cat_name,
            
            
        ]);

        $notification =array(
            'message' => 'Sub Category Added Successfuly',
            'alert-type' =>'success'
        );

        return back()->with( $notification);
        


    }

    public function subCategory_Edit_view($id){

        $category=Category::orderBy('cat_name','ASC')->get();
        $subcategories = SubCategory::findOrFail($id);

        return view('backend.Subcategory.sub_category_edit',compact('subcategories','category'));

    }

    public function subCategory_Edit_create(Request $request){

        $subcategory_id = $request->id;

        SubCategory::findOrFail($subcategory_id)->update([

            'category_id' => $request->category_id,
            'sub_cat_name' => $request->sub_cat_name,
            
        ]);

        $notification =array(
            'message' => 'Sub Category Updated Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('all.sub.brand')->with($notification);

    }

    public function subCategory_delete($id){

        SubCategory::findOrFail($id)->delete();
        
        $notification =array(
            'message' => 'Sub Category Deleted Successfuly',
            'alert-type' =>'info'
        );

        return back()->with( $notification);

    }

    
}
