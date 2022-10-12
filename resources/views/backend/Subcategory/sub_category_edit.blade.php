@extends('admins.admin_master')
@section('admin_index')
@section('backtitle')
  Lassana BooksShop Sub Category Edit
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-6">
			 
    </div>
    <div class="col-12">

              <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
         <form method="post" action="{{route('edit.subcategory.create')}}">
                 @csrf
             <div class="row">
               <div class="col-12">	
               <input type="hidden" name="id" value="{{($subcategories->id)}}" >
               <div class="form-group">
                       <h5>Select Category <span class="text-danger"></span></h5>
                       <div class="controls">
                       <select name="category_id" class="form-control">
									<option value="" selected="" disabled="">Select Category</option>
									@foreach($category as $items)
									<option value="{{$items->id}}" {{$items->id == $subcategories->category_id ?'selected':''}} >{{$items->cat_name}}</option>
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
                           <input type="text" value="{{$subcategories->sub_cat_name}}" name="sub_cat_name" class="form-control"> <div class="help-block"></div></div>
							@error('sub_cat_name')
								<span class="text-danger">{{$message}}</span>
								@enderror
								


                   <div class="text-xs-right" style="float:right;" >
                   <input  type="submit" class="btn btn-rounded btn-info mt-20 " value="Update"> 
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