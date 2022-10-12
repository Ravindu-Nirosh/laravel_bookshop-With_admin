@extends('frontend.main_master')
@section('botdinmic')
@section('title')

Lassan Bookshop/Order Details

@endsection

<div class="space30"></div>

	<!-- Main content -->
	<div class="page-wrap container elements-wrap">
		<h3>Order Details</h3>
		<div class="space30"></div>
		<div class="col-md-12 no-padding">
			<div class="row">
				<div class="col-md-12">
                 
                <div class="col-md-4">
                    <strong>Street Address :</strong> <h4 class="title"> {{$orders->Street_address}}</h4>
                    <strong>City :</strong> <h4 class="title">{{$orders->city_town}}</h4>
                    <strong>Post Code :</strong> <h4 class="title">{{$orders->post_code}}</h4>
                    <strong>Phone Number :</strong> <h4 class="title">{{$orders->phone}}</h4>
                    <strong>Value :</strong> <h4 class="title">Rs.{{$orders->amount}}</h4>
					<p>{{$orders->notes}}</p>
                    <strong>Order Status :</strong> <h4 class="title">
                                @if($orderstatus->status==1)
								<span class="badge badge-warning">Pending</span>
								@elseif($orderstatus->status==2)
								<span class="badge badge-pill badge-primary">Prosessing</span>
								@elseif($orderstatus->status==3)
								<span class="badge badge-pill badge-info">Shipping</span>
                                @else
                                <span class="badge badge-pill badge-success">Complete</span>
								@endif
                    </h4>

                    <a href="{{route('markasReccived',$orders->id)}}" class="btn btn-primary btn-lg btn-orange uppercase">MarK as Recived</a>
                    
					<div class="space30"></div>
                 </div> 
                 <div class="col-md-8">

                     @foreach($OrderItems as $items)
                     <strong>Qty :</strong> <h4 class="title">{{$items->pqty}}</h4>
                        <img src="{{asset($items->product->product_thumbnail)}}" alt="img" width="80px" height="120px" class="img-square pull-left img-left">
                        <strong>Total :</strong> <h4 class="title">Rs.{{$items->pqty*$items->amount}}</h4>
                        <strong>Price :</strong> <h4 class="title">Rs.{{$items->amount}}</h4>
                        <strong>Name :</strong> <h4 class="title">{{$items->product->product_name}}</h4>
                    
                    
                  
                    
                    
                    
                    
                    @endforeach
                </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Main content -->

@endsection