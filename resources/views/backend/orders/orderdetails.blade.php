@extends('admins.admin_master')
@section('admin_index')
@section('backtitle')
  Lassana BooksShop Order Details
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Order Customer Details</h3>
				</div>
				<!-- /.box-header -->
					<div class="table-responsive">
                                    <div class="box-body">
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Customer Name</div>
                                          <div class="px-25 py-10">{{$orders->name}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Customer Phone</div>
                                          <div class="px-25 py-10">{{$orders->phone}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Street address</div>
                                          <div class="px-25 py-10">{{$orders->Street_address}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">City/town</div>
                                          <div class="px-25 py-10">{{$orders->city_town}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Sipping email</div>
                                          <div class="px-25 py-10">{{$orders->sipping_email}}</div>
                                        </div>
                                        <div class="d-flex flex-row mb-3">
                                            <div class="px-25 py-10 w-200">Order Total</div>
                                            <div class="px-25 py-10">Rs.{{$orders->amount}}.00</div>
                                          </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Payment type</div>
                                          <div class="px-25 py-10">{{$orders->payment_type}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Status</div>
                                          <div class="px-25 py-10">{{$orders->status}}</div>
                                        </div>
                                        
                                        
                                        <div class="d-flex flex-row mb-3">
                                          <div class="px-25 py-10 w-200">Notes</div>
                                          <div class="px-25 py-10">{{$orders->notes}}</div>
                                        </div>
                                    
                                  
                          
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
              
    </div>
    
</div><!-- /row -->


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
								<th>Product Name </th>
                                <th>Product Name Images</th>
								<th>Qty</th>
								<th>Order Total</th>
								
								
							</tr>
						</thead>
						<tbody>
						@foreach($OrderItems as $order)
							<tr>
								<td>{{$order->product_name}}</td>
                                <td><img src="{{asset($order->product->product_thumbnail)}}" width="50" height="100" alt=""></td>
								<td>{{$order->pqty}}</td>
								<td>Rs.{{$order->amount}}</td>
                                
                          
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