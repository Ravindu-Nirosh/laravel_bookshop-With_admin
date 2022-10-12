<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Orders;
use App\Models\OrderItems;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;


class CheckOutController extends Controller
{
    public function checkOutStore(Request $request){
        $data=array();
        $data['sipping_name'] = $request->sipping_name;
        $data['sipping_name_last'] = $request->sipping_name_last;
        $data['Street_address'] = $request->Street_address;
        $data['city_town'] = $request->city_town;
        $data['sipping_email'] = $request->sipping_email;
        $data['sipping_phone'] = $request->sipping_phone;
        $data['post_code'] = $request->post_code;
        $data['note'] = $request->note;



        $order_id=Orders::insertGetId([

            'user_id' => Auth::id(),
            'name' => $request->sipping_name,
            'phone' => $request->sipping_phone,
            'post_code' => $request->post_code,
            'Street_address' => $request->Street_address,
            'city_town' => $request->city_town,
            'sipping_email' =>$request->sipping_email,
            'sipping_phone' => $request->sipping_phone,
            'notes' => $request->note,
            'payment_type' => 'Cash On Delivary',
            'amount' => $request->orderamount,
            'status' => 1,
            'created_at' => Carbon::now(),


        ]);

        $carts =Cart::content();
        foreach($carts as $items){
            OrderItems::insert([
                'order_id' =>  $order_id,
                'product_id' => $items->id,
                'product_name' => $items->name,
                'pqty' =>  $items->qty,
                'amount' => $items->price,
            ]);
        }

        Cart::destroy();

        $notification =array(
            'message' => 'Order Placed Successfully',
            'alert-type' =>'success'

        );

        return redirect()->route('dashboard')->with($notification);
    }
}
