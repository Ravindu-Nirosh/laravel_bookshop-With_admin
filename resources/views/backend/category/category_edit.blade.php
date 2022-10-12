@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Lassana BooksShop Category Edit
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
 <div class="row">
 <div class="col-2" ></div>
    <div class="col-8">

              <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
         <form method="post" action="{{route('edit.category.create')}}">
                 @csrf
                 <input type="hidden" name="id" value="{{($categories->id)}}" >

             <div class="row">
               <div class="col-12">						
                   <div class="form-group">
                       <h5>Category Name <span class="text-danger"></span></h5>
                       <div class="controls">
                           <input type="text" name="cat_name" class="form-control" value="{{($categories->cat_name)}}"> <div class="help-block"></div></div>
							@error('name')
								<span class="text-danger">{{$message}}</span>
								@enderror
								


                   <div class="text-xs-right" style="float:right;" >
                   <input  type="submit" class="btn btn-rounded btn-info mt-20 " value="Edit"> 
               </div>
                   
               </div>
              
           </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
    </div><!-- /.col 6-->
    <div class="col-2" ></div>
</div><!-- /row -->
</div>



@endsection