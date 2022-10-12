@extends('frontend.main_master')
@section('botdinmic')

@section('title')

Lassana Bookshop/{{$subcat->sub_cat_name}}

@endsection

<div class="space40"></div>

<!-- Main content -->
<div class="page-wrap container">
    <h3>{{$subcat->sub_cat_name}}</h3>
    <!-- Shop Content -->
    <div role="main" class="main shop">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <p>Showing 1-9 of 25 results.</p>
                    </div>
                    
                </div>
                <div class="space20"></div>
                <div class="row">
                    <ul class="products thumb-info-list">
                        @forelse($products as $item)
                        <li class="col-md-3 product">
                            <a href="shop-product-sidebar.html">
                            <span class="onsale">Sale!</span>
                            </a>
                            <span class="thumb-info">
                                <a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
                                <span><i class="icon icon-shopping-cart"></i> Add to Cart</span>
                                </a>
                                <a href="{{route('productDetails',$item->id)}}">
                                <span class="thumb-info-image">
                                <span class="thumb-info-act">
                                <span class="thumb-info-act-left"><em>View</em></span>
                                <span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="img" class="img-responsive" src="{{asset($item->product_thumbnail)}}">
                                </span>
                                </a>
                                <span class="thumb-info-content">
                                    <a href="shop-product-sidebar.html">
                                        <h4>{{$item->product_name}}</h4>
                                        <span class="price">
                                            @if($item->product_disprice == null)
                                                    <ins><span class="amount">Rs.{{$item->product_price}}</span></ins>
                                            @else
                                                <del><span class="amount">Rs.{{$item->product_price}}</span></del>
                                                <ins><span class="amount">Rs.{{$item->product_disprice}}</span></ins>
                                            @endif
                                            </span>
                                    </a>
                                </span>
                            </span>
                        </li>
                        @empty
				    <div class="col-md-6">
					<h5 class="text-danger ">No Items Avalable </h5>
				    </div>
                        @endforelse

                    </ul>
                </div>
                <div class="row page-nav">
                    {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->



@endsection