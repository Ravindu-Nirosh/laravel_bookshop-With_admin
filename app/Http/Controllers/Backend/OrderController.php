<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderItems;

class OrderController extends Controller
{
    public function orderView(){

        $orders=Orders::latest()->get();

        return view('backend.orders.orderview',compact('orders'));
    }

    public function OrderDetails($Order_id){

        $orders=Orders::where('id',$Order_id)->first();
        $OrderItems = OrderItems::with('product')->where('order_id',$Order_id)->orderby('id','DESC')->get();
        
        return view('backend.orders.orderdetails',compact('orders','OrderItems'));

    }

    public function MarkAsProsess($Order_id){

        Orders::findOrFail($Order_id)->update([

            'status' => 2,

        ]);

        $notification =array(
            'message' => 'Order Succesfully Mark As Prossesing',
            'alert-type' =>'info'
        );

        return redirect()->route('mange-order')->with($notification);
        
    }

    public function MarkAsSipped($Order_id){

        Orders::findOrFail($Order_id)->update([

            'status' => 3,

        ]);

        $notification =array(
            'message' => 'Order Succesfully Mark As Shipped',
            'alert-type' =>'info'
        );

        return redirect()->route('mange-order')->with($notification);
        
    }

    public function OrderDelete($Order_id){

       
        Orders::findOrFail($Order_id)->delete();

        $notification =array(
            'message' => 'Order Deleted Successfuly',
            'alert-type' =>'success'
        );

        return redirect()->route('mange-order')->with($notification);



    }

}
