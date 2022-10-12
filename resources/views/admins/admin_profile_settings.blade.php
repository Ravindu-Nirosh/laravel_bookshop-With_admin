@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Admin Profile Settings
@endsection
<div class="container-full">

<section class="content">
<div class="box box-inverse bg-img" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
						<label class="toggler toggler-danger text-white">
						  <input type="checkbox">
						  <a href="{{route('admin.profile.edit.view')}}"><button type="" class="btn btn-rounded btn-info mb-5">Edit Profile</button></a>
						</label>
					

					  <div class="box-body text-center pb-50">
						<a href="#">
                           
						
                        <img class="avatar avatar-xxl avatar-bordered" src="{{(!empty($adminData->profile_photo_path))?url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no-image-icon-0.jpg')}}" alt="">
						</a>
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$adminData->name}}</a></h4>
						<span> {{$adminData->email}}</span>
					  </div>

					  
					</div>
		</section>
		</div>
		@endsection