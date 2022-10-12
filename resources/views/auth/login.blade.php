@extends('frontend.main_master')
@section('botdinmic')
@section('title')

Lassan Bookshop/Login

@endsection

@php
$prifix =Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp


<div class="space30"></div>

	<!-- Main content -->
	<div class="page-wrap container shop-form-wrap">
		<h3>Login</h3>
		<!-- Shop Content -->
		<div role="main" class="main shop">
			<div class="row">
				<div class="col-md-12">
					<div class="row featured-boxes">
						<div class="col-md-6">
							<div class="featured-box default">
								<div class="box-content">
									<h4 class="review-head">I'm a Returning Customer</h4>
									<div class="space20"></div>
									<form method="POST" action="{{ route('login') }}">
                    				@csrf
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Username or E-mail Address</label>
													<input name="email" id="email"  type="text" value="" class="form-control">
													@error('email')
													<span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
													@enderror
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<a class="pull-right" href="#">(Lost Password?)</a>
													<label>Password</label>
													<input  name="password" id="password" type="password" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<span class="remember-box checkbox">
												<label for="rememberme">
												<input type="checkbox" id="rememberme" name="rememberme">Remember Me
												</label>
												</span>
											</div>
											<div class="col-md-6">
												<button type="submit" class="btn btn-primary btn-orange uppercase pull-right">Login</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="featured-box default">
								<div class="box-content">
									<h4 class="review-head">Register An Account</h4>
									<div class="space20"></div>
									<form method="POST" action="{{ route('register') }}">
                    @csrf
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Name</label>
													<input type="text" name="name" id="name" class="form-control">
                          @error('name')
			                    <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
			                    @enderror
												</div>
											</div>
										</div>
                    <div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>E-mail Address</label>
													<input type="email" name="email" id="email"   class="form-control">
                          		@error('email')
			                    <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
			                    @enderror
								
												</div>
											</div>
										</div>
                    <div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Phone</label>
													<input type="text" name="phone" id="phone" class="form-control">
                          @error('phone')
			                    <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
			                    @enderror
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-6">
													<label>Password</label>
													<input type="password" name="password" id="password"  class="form-control">
                          @error('password')
			                    <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
			                    @enderror
												</div>
												<div class="col-md-6">
													<label>Re-enter Password</label>
													<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                          @error('password_confirmation')
			                    <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
			                    @enderror
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="space20"></div>
												<button type="submit" class="btn btn-primary btn-orange uppercase pull-right">Register</button>
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
    </div>
	<!-- Main content -->

@endsection