@extends('frontend.main_master')
@section('botdinmic')

@section('title')

Lassan Bookshop/Mange Order

@endsection



<div class="space40"></div>

<!-- Main content -->
<div class="page-wrap container shop-form-wrap">
    <h3>Order History</h3>
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
                                                <th class="product-name">
                                                    Date
                                                </th>
                                                <th class="product-price">
                                                    Total
                                                </th>
                                                <th class="product-quantity">
                                                    Details
                                                </th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr class="cart_table_item">
                                                <td class="product-remove">
                                                 {{$order->created_at}}
                                                </td>
                                                <td class="product-thumbnail">
                                                    {{$order->amount}}
                                                </td>
                                                <td class="product-name">
                                                    <a href="{{url('user/order-details/'.$order->id)}}" class="btn btn-primary btn-orange uppercase">See Details</a>
                                                </td>
                                   

                                </tr>
                                @endforeach


                                
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
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-boxes">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->



@endsection