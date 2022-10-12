@extends('admins.admin_master')
@section('admin_index')
@section('backtitle')
  Lassana BooksShop Mange Slider
@endsection

 <div class = "pt-20"></div>
<div class="col-12">
    <div class="row">
    <div class="col-8">
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
								<th>Slider Image</th>
								<th>Title</th>
								<th>Description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($slider as $item)
							<tr>
								<td><img src="{{(!empty($item->slider_image))?url($item->slider_image):url('upload/no-image-icon-0.jpg')}}" alt="" width="75px" height="75px"></td>
								<td>{{$item->title}}</td>
								<td>{{$item->description}}</td>
                                <td>
									<a href="{{route('slider.edit',$item->id)}}" class="btn btn-info mb-5 ">Edit Title Description</a>
									<a href="{{route('slider.edit_image',$item->id)}}" class="btn btn-success mb-5 " >Edit Image</a>
                                    <a href="{{route('Slider.delete',$item->id)}}" class="btn btn-danger mb-5 " id="delete">Delete</a>
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
    <div class="col-4">

              <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
         <form method="post" action="{{route('add.slider')}}" enctype="multipart/form-data">
                 @csrf
             <div class="row">
               <div class="col-12">						
                   <div class="form-group">
                       <h5>Slider Image<span class="text-danger"></span></h5>
                       <div class="controls">
                           <input type="file" name="slider_image" class="form-control"> <div class="help-block"></div>
					</div>
					@error('slider_image')
					<span class="text-danger">{{$message}}</span>
					@enderror

					<div class="form-group">
						<h5>Title  <span class="text-danger"></span></h5>
						<div class="controls">
							<input type="text" name="title" class="form-control"> <div class="help-block"></div>
					 </div>
					 @error('title')
					 <span class="text-danger">{{$message}}</span>
					 @enderror

					 <div class="form-group">
						<h5>Description<span class="text-danger"></span></h5>
						<div class="controls">
							<input type="text" name="description" class="form-control"> <div class="help-block"></div>
					 </div>
					 @error('description')
					 <span class="text-danger">{{$message}}</span>
					 @enderror
								


                   <div class="text-xs-right" style="float:right;" >
                   <input  type="submit" class="btn btn-rounded btn-info mt-20 " value="Add"> 
               </div>
                   
               </div><!-- end from group -->

			   
              
           </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
    </div><!-- /.col 6-->
</div><!-- /row -->
</div>



@endsection