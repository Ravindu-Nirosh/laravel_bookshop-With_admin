@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Lassana BooksShop Order Mangae
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Categories</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Order Date</th>
								<th>Customer Name</th>
								<th>Order Total</th>
								<th>Payment Type</th>
								<th>Phone Number</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
						@foreach($orders as $order)
							<tr>
								<td>{{$order->created_at}}</td>
								<td>{{$order->name}}</td>
								<td>Rs.{{$order->amount}}</td>
                                <td>{{$order->payment_type}}</td>
								<td>{{$order->phone}}</td>
								@if($order->status==1)
								<td><span class="badge badge-warning">Pending</span></td>
								@elseif($order->status==2)
								<td><span class="badge badge-pill badge-primary">Prosessing</span></td>
								@elseif($order->status==3)
								<td><span class="badge badge-pill badge-info">Shipping</span></td>
								@else
								<td><span class="badge badge-pill badge-success">Completed</span></td>
								@endif

								<td>
									<a href="{{route('orderdetailsFullpage',$order->id)}}" class="btn btn-info mb-5">Details</a>
                                    <a href="{{route('orderdelete',$order->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>
									<a href="{{route('markasprosseing',$order->id)}}" class="btn btn-success mb-5"  title="Mark As Prosssesing"><i class="fa fa-check-square"></i></a>
									
									<a href="{{route('markashipp',$order->id)}}" class="btn btn-info mb-5"  title="Make as Sipped"><i class="fa fa-paper-plane-o"></i></a>
									
								


								</td>
                          
							</tr>
							@endforeach
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
    </div>
    
</div><!-- /row -->
</div>



@endsection