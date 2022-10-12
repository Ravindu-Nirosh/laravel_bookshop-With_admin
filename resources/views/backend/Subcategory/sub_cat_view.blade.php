@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Lassana BooksShop Sub Category
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-6">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Sub Categories</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category Name</th>
								<th>Sub Categry Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($subcategory as $item)
							<tr>
								<td>{{$item['category']['cat_name']}}</td>
								<td>{{$item->sub_cat_name}}</td>
                                <td><a href="{{route('subcategory.edit',$item->id)}}" class="btn btn-info mb-5">Edit</a>
                                    <a href="{{route('subcategory.delete',$item->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>
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
				  <h3 class="box-title">Add Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
         <form method="post" action="{{route('all.sub.insert')}}">
                 @csrf
             <div class="row">
               <div class="col-12">	
                   
               <div class="form-group">
                       <h5>Select Category <span class="text-danger"></span></h5>
                       <div class="controls">
                       <select name="category_id" class="form-control">
									<option value="" selected="" disabled="">Select Category</option>
									@foreach($category as $items)
									<option value="{{$items->id}}">{{$items->cat_name}}</option>
									@endforeach
							</select>
							@error('category_id')
								<span class="text-danger">{{$message}}</span>
								@enderror
								


                   <div class="text-xs-right" style="float:right;" >
                
               </div>
               </div> 
               </div>

                   <div class="form-group">
                       <h5>Sub Category Name <span class="text-danger"></span></h5>
                       <div class="controls">
                           <input type="text" name="sub_cat_name" class="form-control"> <div class="help-block"></div></div>
							@error('sub_cat_name')
								<span class="text-danger">{{$message}}</span>
								@enderror
								


                   <div class="text-xs-right" style="float:right;" >
                   <input  type="submit" class="btn btn-rounded btn-info mt-20 " value="Add"> 
               </div>
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