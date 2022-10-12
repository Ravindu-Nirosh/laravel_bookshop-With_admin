@extends('admins.admin_master')
@section('admin_index')
@section('backtitle')
  Lassana BooksShop Manage Category
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-6">
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
								<th>Id</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($category as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->cat_name}}</td>
                                <td><a href="{{route('category.edit',$item->id)}}" class="btn btn-info mb-5">Edit</a>
                                    <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>
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
    <div class="col-6">

              <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
         <form method="post" action="{{route('add.category')}}">
                 @csrf
             <div class="row">
               <div class="col-12">						
                   <div class="form-group">
                       <h5>Category Name <span class="text-danger"></span></h5>
                       <div class="controls">
                           <input type="text" name="cat_name" class="form-control"> <div class="help-block"></div></div>
							@error('name')
								<span class="text-danger">{{$message}}</span>
								@enderror
								


                   <div class="text-xs-right" style="float:right;" >
                   <input  type="submit" class="btn btn-rounded btn-info mt-20 " value="Add"> 
               </div>
                   
               </div>
              
           </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
    </div><!-- /.col 6-->
</div><!-- /row -->
</div>



@endsection