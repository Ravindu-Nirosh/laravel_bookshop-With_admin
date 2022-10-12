@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Admin Profile Edit
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">

<section class="content" >

<!-- Basic Forms -->
<div  class="row">
<div class="col-12">	
 <div class="box" >
     
 <div class="box-header with-border">
     <h4 class="box-title">Admin Profile Edit</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{route('admin.profile.update.create')}}" enctype="multipart/form-data">
             @csrf
             <div class="row">
               <div class="col-12">						
                   <div class="form-group">
                       <h5>User Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" value="{{$adminedit->name}}" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                      
                   </div>
                   <div class="form-group">
                       <h5>Email Address <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="email" name="email" class="form-control" value="{{$adminedit->email}}" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>
                   
                   <div class="form-group">
                       <h5>Profile Image <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="file" name="imagepath" class="form-control"  id="selectedimage"> </div>
                   </div>
                   
                   <div class="form-group">
                       <img id="displayselectedimage" style="width:300px;height:300px;border-radius: 100px;" src="{{(!empty($adminedit->profile_photo_path))?url('upload/admin_images/'.$adminedit->profile_photo_path):url('upload/no-image-icon-0.jpg')}}" alt="">
                   </div>


                   <div class="text-xs-right" style="float:right;" >
                   <button  type="submit" class="btn btn-rounded btn-info btn-lg">Submit</button>
               </div>
                   
               </div>
              
           </form>

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

 </div>
   <!-- /.box-body -->
 </div>

					  
					</div>
		</section>
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