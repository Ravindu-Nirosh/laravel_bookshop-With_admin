<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request,$id){
        $product =Product::findOrFail($id);

        if($product->product_disprice == null){
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quntity,
                'price' => $product->product_price,
                'weight' => 1,
                'options' => ['image' => $product->product_thumbnail,]
            
            ]);

            return response()->json(['success' => 'Successfully Add to Cart']);
        }else{

            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quntity,
                'price' => $product->product_disprice,
                'weight' => 1,
                'options' => ['image' => $product->product_thumbnail,]
            
            ]);

            return response()->json(['success' => 'Successfully Add to Cart']);

        }

    }

    public function miniCartCount(){
        $carts=Cart::content();
        $cartQty=Cart::count();
        $cartTotal=Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal),
        ));
    }
}
