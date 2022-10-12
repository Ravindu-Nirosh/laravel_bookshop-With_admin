@extends('admins.admin_master')
@section('admin_index')
@section('backtitle')
  Lassana BooksShop Product Manage
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Products</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Product Image </th>
								<th>Product Name</th>
								<th>Product Price</th>
								<th>Product Discount Price</th>
								<th>Product Quantity</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($product as $item)
							<tr>
								<td><img src="{{(!empty($item->product_thumbnail))?url($item->product_thumbnail):url('upload/no-image-icon-0.jpg')}}" alt="" width="75px" height="75px"></td>
								<td>{{$item->product_name}}</td>
                                <td>{{$item->product_price}}</td>
								<td>{{$item->product_disprice}}</td>
								<td>{{$item->product_qty}}</td>
								<td>
									@if($item->status == 1)
									<span class="badge badge-success">Active</span>
									@else
									<span class="badge badge-danger">Inactive</span>
									@endif


								</td>
                                <td>
									<a href="{{route('product.edit',$item->id)}}" class="btn btn-info mb-5">Edit</a>
                                    <a href="{{route('product.delete',$item->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>

									@if($item->status == 1)
									<a href="{{route('product.inactive',$item->id)}}" class="btn btn-danger mb-5"  title="Make Inactive"><i class="fa fa-arrow-down"></i></a>
									@else
									<a href="{{route('product.active',$item->id)}}" class="btn btn-success mb-5"  title="Make Active"><i class="fa fa-arrow-up"></i></a>
									@endif

									
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