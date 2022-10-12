@extends('frontend.main_master')
@section('toprwpper_dinamic')


@section('title')

Lassan Bookshop

@endsection

<!-- Slider1 -->
<div class="slider-content container">
			<div id="carousel">
				@foreach($slider as $slide)
				<a href="#"><img  src="{{asset($slide->slider_image)}}" id="item-1" alt="img" /></a>
				@endforeach
			</div>
			<div class="scroll-btns">
				<a href="#" id="s-prev">Prev</a> | <a href="#" id="s-next">Next</a>
			</div>
		</div>
		<!-- Slider1 -->

		<div class="space40"></div>

		<!-- Welcome Content -->
		<div class="container welcome">
			<h2>Welcome To Lassana Bookshop</h2>
			<div class="space50"></div>
			<div class="btn-wrap">
				<a href="{{route('Allproductview')}}" class="btn btn-primary btn-lg btn-orange uppercase">Purchase now</a>
				
			</div>
			<div class="space60"></div>
		</div>
		<!-- Welcome Content -->
@endsection

@section('botdinmic')
<!-- Fetured Products -->
<div class="page-wrap container ">
<!-- Shop Content -->
<div role="main" class="main shop">
	<h3>Fetured Products</h3>
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
	
			@forelse($products_fetured as $item)
					
					<li class="col-md-3 product">
						@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif


						<span class="thumb-info">
							<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
							<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
							</a>
							<a href="{{route('productDetails',$item->id)}}">
							<span class="thumb-info-image">
							<span class="thumb-info-act">
							<span class="thumb-info-act-left"><em>View</em></span>
							<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
							</span>
							<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
		
		</div>
	</div>

<!-- New Products-->

	<h3>Special Offers  </h3>
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
	
			@forelse($products_specila as $item)
					
					<li class="col-md-3 product">
						@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
						<span class="thumb-info">
							<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
								<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
							</a>
							<a href="{{url('products/details/'.$item->id)}}">
							<span class="thumb-info-image">
							<span class="thumb-info-act">
							<span class="thumb-info-act-left"><em>View</em></span>
							<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
							</span>
							<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
		
		</div>
	</div>

	<!-- End New Products-->


	<!-- New Products-->

	<h3>New Products  </h3>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				
			</div>
			<div class="space20"></div>
			<div class="row">
				<ul class="products thumb-info-list">
	
			@forelse($products_new as $item)
					
					<li class="col-md-3 product">
						@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
						<span class="thumb-info">
							<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
							<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
							</a>
							<a href="{{url('products/details/'.$item->id)}}">
							<span class="thumb-info-image">
							<span class="thumb-info-act">
							<span class="thumb-info-act-left"><em>View</em></span>
							<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
							</span>
							<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
		
		</div>
	</div>

	<!-- End New Products-->


		<!-- Cat Wise Products sifi-->

		<h3>New {{$sifiCatwise->sub_cat_name}}  </h3>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
					
					</div>
					
				</div>
				<div class="space20"></div>
				<div class="row">
					<ul class="products thumb-info-list">
		
				@forelse($sifiProdcut as $item)
						
						<li class="col-md-3 product">
							@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
							<span class="thumb-info">
								<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
								<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
								</a>
								<a href="{{url('products/details/'.$item->id)}}">
								<span class="thumb-info-image">
								<span class="thumb-info-act">
								<span class="thumb-info-act-left"><em>View</em></span>
								<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
								</span>
								<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
			
			</div>
		</div>
		
	<!--End Cat WIse New Products sifi-->


	<!-- Cat WIse New Products novel-->

		<h3>New {{$novelCatwise->sub_cat_name}}  </h3>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						
					</div>
					
				</div>
				<div class="space20"></div>
				<div class="row">
					<ul class="products thumb-info-list">
		
				@forelse($novelProdcut as $item)
						
						<li class="col-md-3 product">
							@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
							<span class="thumb-info">
								<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
								<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
								</a>
								<a href="{{url('products/details/'.$item->id)}}">
								<span class="thumb-info-image">
								<span class="thumb-info-act">
								<span class="thumb-info-act-left"><em>View</em></span>
								<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
								</span>
								<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
			
			</div>
		</div>
	
	
		<!-- Cat WIse New Products novel-->


		<!-- Cat WIse New Products sinhla-->

		<h3>New {{$sinhlacategory->cat_name}}  </h3>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					
					
				</div>
				<div class="space20"></div>
				<div class="row">
					<ul class="products thumb-info-list">
		
				@forelse($sinhalaProdcut as $item)
						
						<li class="col-md-3 product">
							@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
							<span class="thumb-info">
								<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
								<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
								</a>
								<a href="{{url('products/details/'.$item->id)}}">
								<span class="thumb-info-image">
								<span class="thumb-info-act">
								<span class="thumb-info-act-left"><em>View</em></span>
								<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
								</span>
								<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
			
			</div>
		</div>
	
	
		<!-- Cat WIse New Products Sinhla-->


		<!-- Cat WIse New Products English-->

		<h3>New {{$englishcategory->cat_name}}  </h3>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						
					</div>
					
				</div>
				<div class="space20"></div>
				<div class="row">
					<ul class="products thumb-info-list">
		
				@forelse($englishProdcut as $item)
						
						<li class="col-md-3 product">
							@if($item->product_disprice == null)
						
						@else
							@php
								$amount = $item->product_price - $item->product_disprice;
								$discount=($amount/$item->product_price)*100;
							@endphp
							<a href="shop-product-sidebar.html">
							<span class="onsale"> {{round($discount)}}%</span>
							</a>
						@endif
							<span class="thumb-info">
								<a data-toggle="modal" data-target="#addtocartmodel" href="shop-cart.html" class="add-to-cart-product" id="{{$item->id}}" onclick="productviewmodel(this.id)">
								<span><i class="icon icon-shopping-cart" ></i> Add to Cart</span>
								</a>
								<a href="{{url('products/details/'.$item->id)}}">
								<span class="thumb-info-image">
								<span class="thumb-info-act">
								<span class="thumb-info-act-left"><em>View</em></span>
								<span class="thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
								</span>
								<img alt="img" class="img-responsive" src="{{$item->product_thumbnail}}">
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
			
			</div>
		</div>
	
	
		<!-- Cat WIse New Products English-->
	
	

</div>
</div>

	<!-- End Fetured Products -->

	<div class="divider"></div>

<div class="main-wrap">

		

			

			
</div>
@endsection