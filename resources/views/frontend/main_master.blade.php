<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="description" content="Chemistry - Responsive Muti-Purpose Portfolio Template">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>@yield('title')</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Google Webfonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,600italic,700italic,800,800italic,300italic,300" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Sanchez:400,400italic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

	<!--[if lt IE 9]>
	<script src="/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap core CSS -->
	<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/theme-shop.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/elements.css')}}css/" rel="stylesheet">
	<link href="{{asset('frontend/fonts/icomoon/iconmoon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
	
    <!-- Plugins CSS -->
    <link href="{{asset('frontend/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/owl-carousel/owl.theme.css')}}js/" rel="stylesheet">
    <link href="{{asset('frontend/js/flexslider/flexslider.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/isotope.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/js/slickNav/slicknav.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    

	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->

</head>
<body id="home">

<div class="body">
	<div class="top-wrap">
		<div class="overlay-bg"></div>

	@include('frontend.header')
		
	@yield('toprwpper_dinamic')

		
	</div>

	@yield('botdinmic')

	@include('frontend.footer')
	<!-- Portfolio - Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<span class="close" data-dismiss="modal" data-target="#myModal"><img src="images/close.png" alt="img"></span>
					<a class="prev-project" href="#"  data-toggle="modal" data-dismiss="modal" data-target="#myModal1"></a>
					<a class="next-project" href="#"  data-toggle="modal" data-dismiss="modal" data-target="#myModal1"></a>
					<div class="project-single container">
						<div class="col-md-7">
							<div class="project-slide">
								<div class="big-img">
									<img src="http://placehold.it/530x670" class="img-responsive p1-img" alt="img">
									<img src="http://placehold.it/530x670" class="img-responsive p2-img" style="display:none;" alt="img">
									<img src="http://placehold.it/530x670" class="img-responsive p3-img" style="display:none;" alt="img">
								</div>
								<div class="small-img">
									<ul>
										<li class="p1">
											<div class="small-img-inner">
												<img src="http://placehold.it/170x150" class="img-responsive" alt="img">
												<span class="small-img-overlay"><i class="fa fa-plus"></i></span>
											</div>
										</li>
										<li class="p2">
											<div class="small-img-inner">
												<img src="http://placehold.it/170x150" class="img-responsive" alt="img">
												<span class="small-img-overlay"><i class="fa fa-plus"></i></span>
											</div>
										</li>
										<li class="p3">
											<div class="small-img-inner">
												<img src="http://placehold.it/170x150" class="img-responsive" alt="img">
												<span class="small-img-overlay"><i class="fa fa-plus"></i></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h4>I Can Touch Your Heart</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
							<div class="project-details">
								<h5>Client:</h5>
								<p>Samwise Gamgee</p>
								<div class="divider2"></div>
								<h5>Brief:</h5>
								<p>Blue Monster trying to capture a heart</p>
								<div class="divider2"></div>
								<h5>Budget:</h5>
								<p>$3,000 - $4,500</p>
								<div class="divider2"></div>
								<h5>Applications Used:</h5>
								<p>Photoshop CS6 & Illustrator CS6</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /Portfolio - Modal -->
    
</div>


<!-- Modal -->
<div class="modal fade" id="addtocartmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title" style="color:white" id="exampleModalLabel">Add to Cart</h4>
		  <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close" style=" background-color: Transparent;border: none; outline: none;color:white"></button>
		</div>
		<div  class="modal-body">
			<div  class="row">
					<ul class="products thumb-info-list" style="list-style-type: none; ">
					<li class="col-md-6 product">
						<span class="thumb-info">
							<a href="shop-product-sidebar.html">
							<span class="thumb-info-image" >
							<img alt="img" class="img-responsive"  src="" id="pimage">
							</span>
							</a>
							<span class="thumb-info-content">
								<a href="shop-product-sidebar.html">
									<h4 id="pname">Limted Print</h4>
									<span class="price">
									<del style="margin-right:10px"><span class="amount text-danger "></span><span class="amount text-danger" id="oldprice"></span></del>
									<ins style="font-size: 20px;">Rs.<span id="prodPrice"  ></span></ins>
									</span>
								</a>
							</span>
						</span>
					</li>
					<li class="col-md-6 product">
						<span class="text-white text-lg">Auther :</span><span><p class="text-white text-lg" id="planguage"></p></span>
						<span class="text-white text-lg">Language :</span><span><p class="text-white text-lg" id="pauthor"></p></span>
						<span class="text-white text-lg">ISBN :</span><span><p class="text-white text-lg" id="pisbn"></p></span>
						<span class="text-white text-lg">Description :</span><span><p class="text-white text-lg" id="pshortdes"></p></span>
						<span class="text-white text-lg">Description :</span><span><p class="text-white text-lg" id="carquntity"></p></span>
					</li>
				</ul>
				

			</div>{{-- end row --}}

			<div class="row">
				
				<div  class="col-md-8">

					<ul class="products thumb-info-list" style="list-style-type: none; margin: 0; padding: 0;">
						<li class="col-md-10 product">
							<label for="exampleInputEmail1" style="color:white">Qty</label>
   					 <input  type="number" class="form-control"  id="qty" value="1" min="1" style=" width: 50%;">

						</li>
					</ul>
					
				</div>
				<div class="col-md-4"></div>


			</div>{{-- end row --}}

		

		</div>{{-- end model body --}}

		<div class="modal-footer">
		  
		  <input type="hidden" id="product_id">
		  <button type="button" class="btn btn-primary" class="close" data-dismiss="modal" id="closemodle" onclick="addToCart()" >Add to Cart</button>
		</div>
	  </div>
	</div>
  </div>{{-- END Modle --}}


  




<script type="text/javascript">
	$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
	})

	function productviewmodel(id){
		$.ajax({
			type:'GET',
			url:'/product/view/modal/'+id,
			dataType:'json',
			success:function(data){
				$('#pname').text(data.product.product_name)
				$('#pauthor').text(data.product.product_author)
				$('#pisbn').text(data.product.product_isbn)
				$('#pprice').text(data.product.product_price)
				$('#planguage').text(data.product.product_lang)
				$('#pshortdes').text(data.product.product_shortdescription)
				$('#pimage').attr('src','/'+data.product.product_thumbnail)
				$('#product_id').val(id)
				$('#qty').val(1)

				if(data.product.product_disprice == null){
					$('#prodPrice').text('')
					$('#oldprice').text('')
					$('#prodPrice').text(data.product.product_price)

				}else{
					$('#prodPrice').text(data.product.product_disprice)
					$('#oldprice').text(data.product.product_price)
				}

			}
		})
	}

//Add TO CART FUNCTION

	function addToCart(){
		var product_name =$('#pname').text();
		var id=$('#product_id').val();
		var quntity=$('#qty').val();
		$.ajax({
			type:"POST",
			dataType:'json',
			url:"/cart/data/stroe/"+id,
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data:{
				product_name:product_name, quntity:quntity,
			},
			
			success:function(data){
				productMiniCart();
				$('#closemodle').click(1);
				
				const Toast=Swal.mixin({
						toast:true,
						position: 'top-end',
						icon: 'success',
						showConfirmButton: false,
						timer: 3000
						})
						if($.isEmptyObject(data.error)){
							Toast.fire({
								type:'success',
								title:data.success
							})
						}else{
							Toast.fire({
								type:'error',
								title:data.error
							})

						}
			}
		})
	}	

	

</script>



<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/flexslider/jquery.flexslider.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waterwheelCarousel.js')}}"></script>
<script src="{{asset('frontend/js/slickNav/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.isotope.min.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{asset('frontend/js/jquery.gmap.js')}}"></script>
<script src="{{asset('frontend/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/custom-slider.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">

	function productMiniCart(){
		
			$.ajax({
			type:"GET",
			url:"/minicart/data/count",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType:"json",
			success:function(data){
				//document.querySelector('#minicartcount').innerHTML=data.cartQty
				var minicartdata=""
				$('#minicartcount').html(data.cartQty)
				$('#subtotal').html(data.cartTotal)


				
			},

	
			})
			
	}
	productMiniCart();
	
</script>

<script type="text/javascript">

	function Cartpagefun(){
			$.ajax({
			type:"GET",
			url:"/getmain/cart/products",
			dataType:"json",
			success:function(response){
				var rows=""
				$.each(response.carts,function(key,value){
					rows +=`<tr class="cart_table_item">
                                                <td class="product-remove">
                                                    <a title="Remove this item" class="remove" href="#">
                                                    <i class="icon icon-minus-square"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="shop-product-sidebar.html">
                                                    <img width="100" height="100" alt="img" class="img-responsive" src="/${value.options.image}">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="shop-product-sidebar.html">${value.name}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">${value.price}</span>
                                                </td>
                                                <td class="product-quantity">
                                
                                <div class="quantity">
									${value.qty > 1

									?`<input type="button" class="minus" value="-" id="${value.rowId}" onClick="cartqtyDecriment(this.id)">`
									:`<input type="button" class="minus" style="background-color:gray;" value="-" disabled >`
									
									}
									
									
									<input type="number" class="input-text qty text" disabled title="Qty" value="${value.qty}" name="quantity" min="1" step="1" id="Qty3">
									<input type="button" class="plus" value="+" id="${value.rowId}" onClick="cartqtyIncrement(this.id)">
                                    
                                </div>
                                
                                </td>
                                <td class="product-subtotal">
									<span class="amount">Rs.</span><span class="amount">${value.subtotal}</span>
                                </td>
								<td class="product-subtotal">
									<button type="submit" class="btn btn-danger" id="${value.rowId}" onclick="cartItemRemove(this.id)">X</button>
                                </td>
                                </tr>`
				});
				$('#cartrows').html(rows)
				$('#finalsubtoatl').html(response.cartTotal)

				}
				

			
				

			})
			
	}
	Cartpagefun()

	//Cart Item Remove
	function cartItemRemove(id){
		$.ajax({
			type:'GET',
			url:'/maincart/item/remove/'+id,
			dataType:'json',
			success:function(data){
				Cartpagefun();
				productMiniCart();
				const Toast=Swal.mixin({
						toast:true,
						position: 'top-end',
						icon: 'success',
						showConfirmButton: false,
						timer: 3000
						})
						if($.isEmptyObject(data.error)){
							Toast.fire({
								type:'success',
								title:data.success
							})
						}else{
							Toast.fire({
								type:'error',
								title:data.error
							})

						}

			}
		})
	}


	//Cart qty Incremtn
	function cartqtyIncrement(id){
		$.ajax({
			type:'GET',
			url:'/cart/incremt/qty/'+id,
			dataType:'json',
			success:function(data){
				productMiniCart();
				Cartpagefun();

			}
		})

	}
	//End Cart qty Incremtn

	//Cart qty Incremtn
	function cartqtyDecriment(id){
		$.ajax({
			type:'GET',
			url:'/cart/decrement/qty/'+id,
			dataType:'json',
			success:function(data){
				productMiniCart();
				Cartpagefun();

			}
		})

	}
	//End Cart qty decrement


	
</script>


<script>

    @if(Session::has('message'))
    var type="{{Session::get('alert-type')}}"
    switch(type){
      case 'info':
      toastr.info("{{Session::get('message')}}");
      break;

      case 'success':
      toastr.success("{{Session::get('message')}}");
      break;

      case 'warning':
      toastr.warning("{{Session::get('message')}}");
      break;

      case 'error':
      toastr.error("{{Session::get('message')}}");
      break;
    }
    @endif

  </script>



</body>
</html>
