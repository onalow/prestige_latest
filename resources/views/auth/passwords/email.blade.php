<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="{{asset("css/bundles/frontend/images/u.png")}}">
	<title>PIS Reset Password</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700|Roboto+Slab:100,300,400,700|Roboto:300,400,500,700" rel="stylesheet">

	<link href="{{asset("css/bundles/homepage/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("css/bundles/frontend/css/flag-icon.min.css")}}" rel="stylesheet">

	<link href="{{asset("css/bundles/homepage/css/jquery.mmenu.css")}}" rel="stylesheet">
	<link href="{{asset("css/bundles/homepage/css/style.css")}}" rel="stylesheet">
	<link href="{{asset("css/bundles/homepage/css/be-style.css")}}" rel="stylesheet">
</head>
<body class="clx-account-pages">
	<section class="clx-login-page">
		{{-- <canvas id="clx-banner-canvas1"></canvas> --}}
		{{-- <div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-right"></div> --}}
		{{-- <div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-left"></div> --}}
		<div class="container">
			<div class="clx-account-bg">
				<div class="clx-account-logo text-center">


					<a href="/"><img src="{{asset("css/bundles/frontend/images/s.png")}}" alt="PIS" title="PIS"></a>

				</div>
				<h1 class="clx-account-heading text-center">
				Reset Password </h1>
				<div class="clx-form-box">
					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="row">

							<div class="col-sm-12 form-field ">
								<input type="text" id="form_email" name="email" value="{{ old('email')}}" required="required" class="form-control" />
								<label class="animate-label required" for="form_email">E-Mail</label>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>


							<div class="col-sm-12 clx-btn-wrapper">
								<button type="submit" id="form_save"  class="btn clx-accunt-btn">Send Reset Link</button>
							</div>

						</form>
						

					</div>
					<br>	
					<div class="text-center">
						<a class="d-block" style="color: white; text-decoration: underline; font-weight: 400;" href="/login" title="Log In">Login</a>
					</div> 
					<br>	
					<div class="text-center">
						<a class="d-block" style="color: white; text-decoration: underline; font-weight: 400;" href="/register" title="Log In">Register</a>
					</div>
				</div>
			</div>
		</section>
		<script src="{{asset("css/bundles/homepage/js/jquery.min.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/tether.min.js")}}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src='{{asset("css/bundles/homepage/js/zepto.min.js")}}'></script>
		<script src='{{asset("css/bundles/homepage/js/Stats.js")}}'></script>
		<script src="{{asset("css/bundles/homepage/js/bootstrap.min.js")}}"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<script src="{{asset("css/bundles/homepage/js/ie10-viewport-bug-workaround.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/jquery.mmenu.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/particles.min.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/clx-home.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/clx-custom.js")}}"></script>
		<script src="{{asset("css/bundles/homepage/js/be-clx-custom.js")}}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		@include('sweet::alert')
	</body>
	</html>