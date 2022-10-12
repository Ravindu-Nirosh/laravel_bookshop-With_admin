@extends('frontend.main_master')
@section('botdinmic')

<div class="space30"></div>

	<!-- Main content -->
	<div class="page-wrap container elements-wrap">
		<h3>Profile Details</h3>
		<div class="space30"></div>
		<div class="col-md-12 no-padding">
			<div class="row">
				<div class="col-md-12">
                <div class="col-md-2">
					<img src="{{(!empty($userdata->profile_photo_path))?url('upload/user_images/'.$userdata->profile_photo_path):url('upload/no-image-icon-0.jpg')}}" style="border-radius: 25px;" alt="img" width="100px" height="100px" class="img-square pull-left img-left">
                </div>  
                <div class="col-md-6">
                    <strong>Name :</strong> <h4 class="title">{{Auth::User()->name}}</h4>
                    <strong>Email Address :</strong> <h4 class="title">{{Auth::User()->email}}</h4>
                    <strong>Phone :</strong> <h4 class="title">{{Auth::User()->phone}}</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit. Sed laoreet massa at dui aliquet scelerisque. Fusce a neque arcu, tempor congue dolor. Phasellus diam enim, vulputate sed ornare eu, fringilla vel sapien. Fusce metus ligula, adipiscing vitae egestas volutpat, laoreet eget augue. Duis egestas, dui at molestie scelerisque, felis nisl lobortis velit, et consequat eros nibh id lorem.</p>
					<div class="space30"></div>
                 </div> 
                 <div class="col-md-4">
                 <a href="{{route('user.profile')}}" class="btn btn-primary btn-blue uppercase">Edit Profile</a>
                </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Main content -->

@endsection