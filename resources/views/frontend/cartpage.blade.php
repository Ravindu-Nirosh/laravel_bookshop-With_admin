@extends('frontend.main_master')
@section('botdinmic')

@section('title')

Lassana Bookshop/Cart

@endsection

<div class="space40"></div>

<!-- Main content -->
<div class="page-wrap container shop-form-wrap">
    <h3>Shopping Cart</h3>
    <!-- Shop Content -->
    <div role="main" class="main shop">
        <div class="row">
            <div class="col-md-12">
                <div class="row featured-boxes">
                    <div class="col-md-12">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content">
                                
                                    <table  class="shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;
                                                    
                                                </th>
                                                <th class="product-thumbnail">&nbsp;
                                                    
                                                </th>
                                                <th class="product-name">
                                                    Product
                                                </th>
                                                <th class="product-price">
                                                    Price(Rs.)
                                                </th>
                                                <th class="product-quantity">
                                                    Quantity
                                                </th>
                                                <th class="product-subtotal">
                                                    Total
                                                </th>
                                                <th class="product-subtotal">
                                                    Remove
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="cartrows">
                                            

                                
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-boxes">
                    <div class="col-md-6">
                        <div class="featured-box default">
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-box default">
                            <div class="box-content">
                                <h4>Cart Totals</h4>
                                <table   class="cart-totals">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                           
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
                                                <h4 class="amount">Rs.<span id="finalsubtoatl"></span></h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-boxes">
                    <div class="col-md-12">
                        <div class="actions-continue">
                            <a href="{{route('checkoutpage')}}" class="btn btn-primary btn-lg btn-orange uppercase">Proceed to Checkout ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->



@endsection