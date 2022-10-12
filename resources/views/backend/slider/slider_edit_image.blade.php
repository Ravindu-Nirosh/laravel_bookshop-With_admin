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
            <form method="post" action="{{route('edit.slider_image.create')}}" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="id" value="{{($slider->id)}}" >

             <div class="row">
               <div class="col-12">						
               
                <div class="form-group">
                    <h5>Slider Image <span class="text-danger"></span></h5>
                    <div class="controls">
                        <input type="file" name="sliderImage" id="selectedimage" class="form-control"> <div class="help-block"></div>
                
                     </div>
                     <img id="displayselectedimage" name="slider_image" style="width:300px;height:300px;border-radius: 100px;" src="{{(!empty($slider->slider_image))?url($slider->slider_image):url('upload/no-image-icon-0.jpg')}}" alt="">
                         @error('slider_image')
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

<script>  

    function showImage(src,target) {
     var fr=new FileReader();
     // when image is loaded, set the src of the image where you want to display it
     fr.onload = function(e) { target.src = this.result; };
     src.addEventListener("change",function() {
       // fill fr with image data    
       fr.readAsDataURL(src.files[0]);
     });
   }
   
   var src = document.getElementById("selectedimage");
   var target = document.getElementById("displayselectedimage");
   showImage(src,target); 
       
   </script>

@endsection