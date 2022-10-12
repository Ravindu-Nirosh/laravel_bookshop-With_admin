@extends('frontend.main_master')
@section('botdinmic')
@section('title')

Lassan Bookshop/User Profile

@endsection

<div class="space30"></div>

	<!-- Main content -->
	<div class="page-wrap container elements-wrap">
		<h3>Profile Details</h3>
		<div class="space30"></div>
		<div class="col-md-12 no-padding">
			<div class="row">
				<div class="col-md-12">
                <div class="col-md-2">
					<img src="{{(!empty( $user->profile_photo_path))?url('upload/user_images/'. $user->profile_photo_path):url('upload/no-image-icon-0.jpg')}}" style="border-radius: 25px;" alt="img" width="100px" height="100px" class="img-square pull-left img-left">
                </div>  
                <div class="col-md-10">
               
					<div class="space30"></div>
                   
							<div class="featured-box default">
								<div class="box-content">
									<h4 class="review-head">Updtae your Profile </h4>
									<div class="space20"></div>
									<form action="{{route('user.profile.updtae.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
                                                    <strong>Name :</strong>
													<input type="text" name="name" id="name" Value="{{$user->name}}" class="form-control">
                          
												</div>
											</div>
										</div>
                                         <div class="row">
											<div class="form-group">
												<div class="col-md-12">
                                                     <strong>Email Address :</strong>
													<input type="email" name="email" id="email" Value="{{$user->email}}"   class="form-control">
                          
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="form-group">
												<div class="col-md-12">
                                                <strong>Phone :</strong>
													<input type="text" name="phone" id="phone" Value="{{$user->phone}}" class="form-control">
                                        </div>
											</div>
										</div>
										    <div class="row">
											<div class="form-group">
												<div class="col-md-6">
													<label>Seclet Profile Photo</label>
													<input type="file"  name="profile_photo_path" id="password_confirmation" class="form-control">
                         
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="space20"></div>
												<button type="submit" class="btn btn-primary btn-orange uppercase pull-right">Updtae Profile</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
                 
                 
				</div>
				
			</div>
		</div>
	</div>
	<!-- Main content -->

@endsection