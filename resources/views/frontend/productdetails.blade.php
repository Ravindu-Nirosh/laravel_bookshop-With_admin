@extends('frontend.main_master')
@section('botdinmic')
@section('title')

Lassan Bookshop/Prodcut Details

@endsection

<div class="space40"></div>
<!-- Main content -->
<div class="page-wrap container">
    <!-- Shop Content -->
    <div class="main shop">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div id="product-single-item" class="owl-carousel">
                            <img alt="img" class="img-responsive img-rounded" src="{{asset($products->product_thumbnail)}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary entry-summary">
                            <h2 class="shorter" id="pname">{{$products->product_name}}</h2>
                            <div class="review_num">
                                <span class="count">1</span> review
                            </div>
                            <div title="Rated 5.00 out of 5" class="star-rating">
                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                            </div>
                            <p class="price">
                                <span class="amount">Rs.{{$products->product_price}}</span>
                            </p>
                            <div class="space20"></div>
                            <p class="taller">{{$products->product_shortdescription}} </p>
                            <div class="space50"></div>
                            
                                <div class="quantity">
                                    <input type="button" class="minus" value="-" onClick="Qty.value = (Qty.value-1)">
                                    <input type="number" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" id="Qty">
                                    <input type="button" class="plus" value="+" onClick="Qty.value = (+Qty.value+1)">
                                </div>
                                <input type="hidden" id="product_id" value="{{$products->id}}">
                                <button href="#" type="submit" class="btn btn-primary btn-sm btn-green uppercase cart-button" onclick="addToCart()" >Add to cart</button>
                           
                            <div class="product_meta">
                                <span class="posted_in">Categories: <a rel="tag" href="#">Artwork</a>, <a rel="tag" href="#">Prints</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs tabs-product">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#productDescription" data-toggle="tab">Description</a></li>
                                <li><a href="#productInfo" data-toggle="tab">Aditional Information</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="productDescription">
                                    <p>{{$products->product_longdescription}}</p>
                                </div>
                                <div class="tab-pane" id="productInfo">
                                    <div class="space10"></div>
                                    <table class="table push-top">
                                        <tbody>
                                            <tr>
                                                <th>
                                                   Auther
                                                </th>
                                                <td>
                                                    {{$products->product_author}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Publisher
                                                </th>
                                                <td>
                                                    {{$products->product_publisher}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Language
                                                </th>
                                                <td>
                                                    {{$products->product_lang}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    ISBN
                                                </th>
                                                <td>
                                                    {{$products->product_isbn}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="productReviews">
                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="img" src="http://placehold.it/100x105">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>Emily Rose</strong>
                                                        <span class="pull-right">
                                                            <div title="Rated 5.00 out of 5" class="star-rating">
                                                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </span>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h4 class="review-head">Add a review</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form id="submitReview">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Your name *</label>
                                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your email address *</label>
                                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space20"></div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>Review *</label>
                                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="btn btn-primary btn-gray uppercase pull-right" href="#">Submit Review</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="tall" />

                <div class="row">
                    <div class="r-posts col-md-12" style="margin:0px;padding:0px 15px;">
                        <h3>Other Related Products</h3>
                        <div class="space20"></div>
                    </div>
                    <ul class="products thumb-info-list">
                     @forelse($catwise_product as $item)
                        <li class="col-md-4 product">
                            <a href="{{route('productDetails',$item->id)}}">
                            <span class="onsale">Sale!</span>
                            </a>
                            <span class="thumb-info">
                                <a href="" class="add-to-cart-product">
                                <span><i class="icon icon-shopping-cart"></i> Add to Cart</span>
                                </a>
                                <a href="{{route('productDetails',$item->id)}}">
                                <span class="thumb-info-image">
                                <span class="thumb-info-act">
                                <span class="thumb-info-act-left"><em>View</em></span>
                                <span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                </span>
                                <img alt="img"  class="img-responsive" src="{{asset($item->product_thumbnail)}}">
                                </span>
                                </a>
                                <span class="thumb-info-content">
                                    <a href="shop-product-sidebar.html">
                                        <h4>{{$item->product_name}}</h4>
                                        <span class="price">
                                        <del><span class="amount">$325</span></del>
                                        <ins><span class="amount">Rs.{{$item->product_price}}</span></ins>
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
            </div>

            <div class="col-md-3">
                <aside>
                    <div class="side-widget">
                        <h5>Search</h5>
                        <div class="search">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </div>
                    <div class="space50"></div>
                    <div class="side-widget">
                        <h5>Related Products</h5>
                        <ul class="simple-post-list">
                            @foreach($related_product as $product)
                            <li>
                                <div class="post-image">
                                    <div class="img-thumbnail">
                                        <a href="{{route('productDetails',$product->id)}}">
                                        <img alt="img" width="90" height="130" class="img-responsive" src="{{asset($product->product_thumbnail)}}">
                                        <div class="post-info">
                                            <a href="shop-product-sidebar.html">{{$product->product_name}}</a>
                                            <div class="post-meta1">
                                                Rs.{{$product->product_price}}
                                            </div>
                                            <hr style="margin: auto;" class="mt-2">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->


@endsection