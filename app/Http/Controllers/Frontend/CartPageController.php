<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;

class CartPageController extends Controller
{
    public function MyCart(){
        return view('frontend.cartpage');
    }

    public function GetCartProducts(){
        $carts=Cart::content();
        $cartQty=Cart::count();
        $cartTotal=Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal),
        ));
    }

    public function cartItemRemove($id){
        Cart::remove($id); 

        return response()->json(['success' => 'Product Successfully Removed From Cart']);
    }

    public function cartIncremtn($id){
        $row =Cart::get($id);
        Cart::update($id,$row->qty+1);

        return response()->json('increment');
    }

    public function cartdecriment($id){
        $row =Cart::get($id);
        Cart::update($id,$row->qty-1);

        return response()->json('decriment');
    }

    public function cartCheckout(){

        if(Auth::check()){

            if(Cart::total()>0){

                $carts=Cart::content();
                $cartQty=Cart::count();
                $cartTotal=Cart::total();

                return view('frontend.checkoutpage',compact('carts','cartTotal','cartQty'));

            }else{

                $notification =array(
                    'message' => 'Add at least one Product to Checkout',
                    'alert-type' =>'info'
                );
        
                return redirect()->route('homeview')->with($notification);

            }

        }else{

            $notification =array(
                'message' => 'You Need to login first',
                'alert-type' =>'error'
            );
    
            return redirect()->route('login')->with($notification);
    
        }
    }
}
