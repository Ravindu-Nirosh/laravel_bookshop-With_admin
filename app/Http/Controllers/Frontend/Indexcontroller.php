<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Slider;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\Category;

class Indexcontroller extends Controller
{
    public function Index(){

        $slider=Slider::orderBy('id','DESC')->limit(6)->get();
        $products_fetured=Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->limit(4)->get();
        $products_specila=Product::where('status',1)->where('specila_offer',1)->orderBy('id','DESC')->limit(4)->get();
        $products_new=Product::where('status',1)->where('hotdeals',1)->orderBy('id','DESC')->limit(4)->get();

        $sifiCatwise=SubCategory::skip(0)->first();
        $sifiProdcut=Product::where('status',1)->where('subcategory_id',$sifiCatwise->id)->orderBy('id','DESC')->limit(4)->get();

        
        $novelCatwise=SubCategory::skip(1)->first();
        $novelProdcut=Product::where('status',1)->where('subcategory_id',$novelCatwise->id)->orderBy('id','DESC')->limit(4)->get();

        $sinhlacategory=Category::skip(0)->first();
        $sinhalaProdcut=Product::where('status',1)->where('category_id',$sinhlacategory->id)->orderBy('id','DESC')->limit(4)->get();

        
        $englishcategory=Category::skip(1)->first();
        $englishProdcut=Product::where('status',1)->where('category_id',$englishcategory->id)->orderBy('id','DESC')->limit(4)->get();


        return view('frontend.index',compact('slider','products_fetured','products_specila','products_new','sifiCatwise','sifiProdcut','novelCatwise','novelProdcut','sinhlacategory','sinhalaProdcut','englishcategory','englishProdcut'));
    }

    public function loginview(){
        return view('auth.login');
    }

    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function UserProfile(){
        $id=Auth::user()->id;
        $user=User::find($id);
        return view('frontend.userprofile',compact('user'));


    }

    public function UserProfile_create(Request $request){

        $id=Auth::user()->id;
        $data = User::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;


        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification =array(
            'message' => 'Profile Updated Successfuly',
            'alert-type' =>'success'

        );

        return redirect()->route('dashboard')->with($notification);

    }


    public function product_details($id){

        $products = Product::find($id);

        $subcatID=$products->subcategory_id;
        $catID=$products->category_id;

        $related_product=Product::where('subcategory_id',$subcatID)->orderBy('id','DESC')->limit(3)->get();
        $catwise_product=Product::where('category_id',$catID)->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.productdetails',compact('products','related_product','catwise_product'));
    }

    public function all_product_view(){
        $products=Product::where('status',1)->orderBy('id','DESC')->paginate(8);
        return view('frontend.allproductshop',compact('products'));
    }

    public function sub_cat_wise_data($sub_cat_id){

        $subcat=SubCategory::findOrFail($sub_cat_id);
        $products=Product::where('status',1)->where('subcategory_id',$sub_cat_id)->orderBy('id','DESC')->paginate(8);
        return view('frontend.catwiseProduct',compact('products','subcat'));

    }

    public function prdouctView_Add_cartajax($id){

        $product=Product::findOrFail($id);

        return response()->json(array(
            'product' => $product,
        ));

    }

    public function UserOrders(){
        $orders=Orders::where('user_id',Auth::id())->orderby('id','DESC')->get();
        return view('frontend.userOrders',compact('orders'));
    }

    public function orderDetailsView($id){

        $orderstatus=Orders::findOrFail($id);

        $orders=Orders::where('id',$id)->where('user_id',Auth::id())->first();
        $OrderItems =OrderItems::with('product')->where('order_id',$id)->orderby('id','DESC')->get();
        return view('frontend.orderDetails',compact('orders','OrderItems','orderstatus'));


    }

    public function markasReccived($id){
        Orders::findOrFail($id)->update([

            'status' => 4,

        ]);

        

        return redirect()->back();

    }

    public function contact(){
        return view('frontend.contact');
    }
}
