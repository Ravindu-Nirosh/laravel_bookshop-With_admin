@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Lassana BooksShop Edit Slider
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
            <form method="post" action="{{route('edit.slider.create')}}" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="id" value="{{($slider->id)}}" >

             <div class="row">
               <div class="col-12">						
                  
                     <div class="form-group">
                       <h5>Title <span class="text-danger"></span></h5>
                       <div class="controls">
                           <input type="text" name="title" class="form-control" value="{{($slider->title)}}"> <div class="help-block"></div></div>
							@error('title')
								<span class="text-danger">{{$message}}</span>
								@enderror


                    <div class="form-group">
                     <h5>Description <span class="text-danger"></span></h5>
                      <div class="controls">
                     <input type="text" name="description" class="form-control" value="{{($slider->description)}}"> <div class="help-block"></div></div>
                       @error('description')
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