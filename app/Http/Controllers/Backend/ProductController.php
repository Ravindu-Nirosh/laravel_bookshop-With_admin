<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
    public function add_product(){

        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('backend.product.product_add',compact('categories','subcategories'));
    }

    public function product_insert(Request $request){

        $validateData =$request->validate([

            'category_id' =>'required',
            'subcategory_id' =>'required',
            'product_name' =>'required',
            'product_code' =>'required',
            'product_qty' =>'required',
            'product_tag' =>'required',
            'product_lang' =>'required',
            'product_author' =>'required',
            'product_price' =>'required',
            'product_shortdescription' =>'required',
            'product_thumbnail' =>'required',
            'product_longdescription' =>'required'
            
        ]);

        $image=$request->file('product_thumbnail');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(252,357)->save('upload/product/'.$name_gen);
        $save_url='upload/product/'.$name_gen;

        Product::insert([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tag' => $request->product_tag,
            'product_lang' => $request->product_lang,
            'product_author' => $request->product_author,
            'product_publisher' => $request->product_publisher,
            'product_isbn' => $request->product_isbn,
            'product_price' => $request->product_price,
            'product_disprice' => $request->product_disprice,
            'product_shortdescription' => $request->product_shortdescription,
            'product_longdescription' => $request->product_longdescription,
            'product_thumbnail'=>$save_url,
            'hotdeals' => $request->hotdeals,
            'featured' => $request->featured,
            'specila_offer' => $request->specila_offer,
            'specila_deals' => $request->specila_deals,
            'status' => 1,
            'created_at' => Carbon::now(),


        ]);

        $notification =array(
            'message' => 'Product Added Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('manage-product')->with( $notification);
    }


    public function manage_product(){
        $product=Product::latest()->get();

        return view('backend.product.manage_product',compact('product'));
    }

    public function edit_product($id){
        $categories =Category::latest()->get();
        $subcategories =SubCategory::latest()->get();
        $product=Product::findOrFail($id);

        return view('backend.product.product_edit',compact('categories','subcategories','product'));
    }

    public function update_product(Request $request){

        $product_id=$request->id;

        Product::findOrFail($product_id)->update([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tag' => $request->product_tag,
            'product_lang' => $request->product_lang,
            'product_author' => $request->product_author,
            'product_publisher' => $request->product_publisher,
            'product_isbn' => $request->product_isbn,
            'product_price' => $request->product_price,
            'product_disprice' => $request->product_disprice,
            'product_shortdescription' => $request->product_shortdescription,
            'product_longdescription' => $request->product_longdescription,
            'hotdeals' => $request->hotdeals,
            'featured' => $request->featured,
            'specila_offer' => $request->specila_offer,
            'specila_deals' => $request->specila_deals,
            'status' => 1,
            'updated_at' =>Carbon::now(),


        ]);

        $notification =array(
            'message' => 'Product Details Updated Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('manage-product')->with($notification);
    }


    public function update_product_image(Request $request){

        $product_id=$request->id;

        $imgdel=Product::findOrFail($product_id);
        $image=$request->file('product_thumbnail');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(252,357)->save('upload/product/'.$name_gen);
        unlink($imgdel->product_thumbnail);
        $save_url='upload/product/'.$name_gen;

        Product::findOrFail($product_id)->update([

            'product_thumbnail' => $save_url,
            'updated_at' =>Carbon::now(),

        ]);

        

        $notification =array(
            'message' => 'Product Image Updated Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('manage-product')->with($notification);


    }

    public function make_inactive($id){

        Product::findOrFail($id)->update([

            'status' => 0,

        ]);

        $notification =array(
            'message' => 'Product Inactiveted Successfuly',
            'alert-type' =>'info'
        );

        return redirect()->route('manage-product')->with($notification);

    }

    public function make_active($id){

        Product::findOrFail($id)->update([

            'status' => 1,

        ]);

        $notification =array(
            'message' => 'Product Activeted Successfuly',
            'alert-type' =>'info'
        );

        return redirect()->route('manage-product')->with($notification);

    }

    public function product_delete($id){

        $product = Product::findOrFail($id);
        unlink($product->product_thumbnail);
        Product::findOrFail($id)->delete();

        $notification =array(
            'message' => 'Product Deleted Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('manage-product')->with($notification);



    }


}
