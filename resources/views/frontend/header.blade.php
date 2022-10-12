	<!-- Header -->
@php
$prifix =Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp


    <header>
			<div class="container">
				<div class="col-md-12">

					<!-- Logo -->
					<h1 class="logo"><a href="./index.html"><img src="{{asset('frontend/images/logo.png')}}" class="img-responsive" alt="img"></a></h1>


					
					<!-- Nav Menu -->
					<div id='cssmenu'>
						<ul>
							<li >
								<a href="/" class="{{($route=='homeview')? 'active-link':''}}" ><span>Home</span></a>
							</li>

					@php
					$category=App\Models\Category::orderBy('cat_name','ASC')->get();
					@endphp
					
						@foreach($category as $cat)
							<li class='has-sub '>
								<a href='#'><span>{{$cat->cat_name}}</span></a>
								<ul>
									@php
									$subcategory=App\Models\SubCategory::where('category_id',$cat->id)->orderBy('sub_cat_name','ASC')->get();
									@endphp
									@foreach($subcategory as $subcat)
									<li ><a href="{{url('subcategory/product/'.$subcat->id)}}"><span>{{$subcat->sub_cat_name}}</span></a></li>
									@endforeach
								</ul>
								
							</li>

						@endforeach

						<li >
							<a href="{{route('Allproductview')}}" class="{{($route=='Allproductview')? 'active-link':''}}" ><span>Shop</span></a>
						</li>

				
						
							<li class='last'><a href='{{route('Contactus')}}'><span>Contact Us</span></a></li>

                            @auth
                                <li class='has-sub'>
                                
								<a href='#' class="{{($route=='dashboard' or  $route=='user.profile' )? 'active-link':''}}" ><span>{{Auth::user()->name}}</span></a>
								<ul>
									<li><a href="{{route('dashboard')}}"><span>Profile</span></a></li>
									<li><a href="{{route('user.profile')}}"><span>Edit Profile</span></a></li>
									<li><a href="{{route('user.orders')}}"><span>Orders</span></a></li>
									<li><a href="{{route('user.logout')}}"><span>Logout</span></a></li>
								</ul>
								</li>
                                @else
                                <li class='has-sub'>
                                
								<a href='#' class="{{($route=='login')? 'active-link':''}}"><span>Account</span></a>
								<ul>
								
									<li><a href="{{(route('login'))}}"><span>Login</span></a></li>
								
								</ul>
								</li>
                            @endauth
							
							<li style="cursor: pointer;margin-left:50px;margin-right:0px;padding-right:0px;" >
								<a href="{{(route('mycart'))}}"><span >Cart <sup><span class="badge badge-warning" style="background-color: darkorange;margin-left:0px;" id="minicartcount"></span></sup>Rs.<span id="subtotal" ></span></a>
								
							</li>
						
								
						

						</ul>
					</div>
				</div>
			</div>
		</header>


		
		<!-- Header -->
       