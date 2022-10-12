<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Orders;
use App\Models\User;
use App\Models\OrderItems;


class AdminController extends Controller
{
    public function Index(){
        return view('admins.admin_login');
    }

    public function Dashboard(){
        $categorycount=Category::latest()->get()->count();
        $orderscount=Orders::latest()->get()->count();
        $orderitemscount=OrderItems::latest()->get()->count();
        $usercount=User::latest()->get()->count();
        $subcategorycount=SubCategory::latest()->get()->count();
        $prodctcount = Product::latest()->get()->count();
        return view('admins.index',compact('prodctcount','categorycount','subcategorycount','orderscount','usercount','orderitemscount'));
    }

    public function Login_create(Request $request){

        $check =$request->all();

        $notificationsucces =array(
            'message' => 'Logged In Successfuly',
            'alert-type' =>'success'
        );

        $notificationerror =array(
            'message' => 'Invalid User Name Or Password',
            'alert-type' =>'error'
        );

        if(Auth::guard('admin')->attempt(['name' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('Admin.Dashboard')->with($notificationsucces);
            

        }else{
            return back()->with($notificationerror);

        }


    }

    public function Logout_create(){
        Auth::guard('admin')->logout();

        $notification =array(
            'message' => 'Admin Logout Successfuly',
            'alert-type' =>'success'
        );
        
        return redirect()->route('login_form')->with($notification);
    }
}
