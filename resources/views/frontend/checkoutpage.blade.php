@extends('frontend.main_master')
@section('botdinmic')

@section('title')

Lassan Bookshop/Check Out

@endsection

<div class="space40"></div>

<!-- Main content -->
<div class="page-wrap container shop-form-wrap">
    <h3>Checkout</h3>
   
    
    <!-- Shop Content -->
    <div role="main" class="main shop checkout-wrap">
        
        <div class="row">
            <div class="col-md-9">
                <div id="first">
                    <h3>Shipping Address</h3>
                    <div class="racc">
                        <div class="toggle-content">
                            <form action="{{route('sippingdetailsStore')}}" method="POST"> 
                                @csrf
                                <input type="hidden" name="orderamount" value="{{$cartTotal}}">
                                <div class="row">
                                    <div class="col-md-12">
                                     
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Country*</label>
                                            <b> Sri Lanka</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Name</label>
                                            <input type="text" value="" name="sipping_name" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Email Address</label>
                                            <input type="text" value="{{Auth::user()->email}}" name="sipping_email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Address </label>
                                            <input type="text" value="" name="Street_address" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>City </label>
                                            <input type="text" value="" name="city_town" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Post Code </label>
                                            <input type="text" value="" name="post_code" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Mobile Number </label>
                                            <input type="text" name="sipping_phone" value="{{Auth::user()->phone}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Note</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="note" id="message"></textarea>

                                        </div>
                                    </div>
                                </div>

                                <h4>Payment</h4>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="remember-box checkbox">
                                            <label>
                                            <input type="checkbox" name="payment" checked="checked" disabled>Cash On delivary
                                            </label>
                                            </span>
                                        </div>
                                    </div>
  
                                <div class="row">
                                    <div class="col-md-12">
                                        <button  type="sumbit" class="btn btn-primary btn-orange uppercase pull-right">Place Order</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h3>Review & Payment</h3>
                    <div class="racc">
                        <div class="toggle-content">
                            <table    class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;
                                            
                                        </th>
                                        <th class="product-name">
                                            Product
                                        </th>
                                        <th class="product-price">
                                            Price
                                        </th>
                                        <th class="product-quantity">
                                            Quantity
                                        </th>
                                        <th class="product-subtotal">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $item)
                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <a href="shop-product-sidebar.html">
                                            <img width="100" height="100" alt="img" class="img-responsive" src="{{asset($item->options->image)}}">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar.html">{{$item->name}}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">Rs.{{$item->price}}</span>
                                        </td>
                                        <td class="product-quantity">
                                            {{$item->qty}}
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">Rs.{{$item->subtotal}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr class="tall">
                            <h4>Cart Totals</h4>
                            <table    class="cart-totals">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>
                                            <strong>Cart Subtotal</strong>
                                        </th>
                                        <td>
                                            <strong><span class="amount">Rs.{{$cartTotal}}</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>
                                            Shipping
                                        </th>
                                        <td>
                                            Cash On delivary <input type="hidden" value="free_shipping" name="shipping_method">
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <th>
                                            <strong>Order Total</strong>
                                        </th>
                                        <td>
                                            <strong><span class="amount">Rs.{{$cartTotal}}</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="tall">
                            
                        </div>
                    </div>
                </div>
                <!-- end of first -->
                <div class="space40"></div>
               
            </div>
            <div class="col-md-3">
                <h4>Cart Totals</h4>
                <table    class="cart-totals">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>
                                <strong>Cart Subtotal</strong>
                            </th>
                            <td>
                                <strong><span class="amount">Rs.{{$cartTotal}}</span></strong>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>
                                Shipping
                            </th>
                            <td>
                                Cash On delivary<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                            </td>
                        </tr>
                        <tr class="total">
                            <th>
                                <strong>Order Total</strong>
                            </th>
                            <td>
                                <strong><span class="amount">Rs.{{$cartTotal}}</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->



@endsection