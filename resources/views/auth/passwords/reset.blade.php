
<<<<<<< HEAD

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
{{-- <canvas id="clx-banner-canvas1"></canvas>
<div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-right"></div>
<div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-left"></div> --}}
<div class="container">
	<div class="clx-account-bg">
		<div class="clx-account-logo text-center">

			<a href="/"><img src="{{asset("css/bundles/frontend/images/s.png")}}" alt="PIS" title="PIS"></a>
		</div>
		<h1 class="clx-account-heading text-center">
		Reset Password </h1>
		<div class="clx-form-box">
			<form method="POST" action="{{ route('password.request') }}">
				@csrf
				<input type="hidden" name="token" value="{{ $token }}">
				<div class="row">


<div class="col-sm-12 form-field">
<input type="text" id="form_email" name="email" value="{{ old('email')}}" required="required" class="form-control" />
<label class="animate-label required" for="form_email">E-Mail</label>
 @if ($errors->has('email'))
    <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>
<div class="col-sm-12 form-field">
<input type="password" id="form_password" name="password" required="required" class="form-control" />
<label class="animate-label required" for="form_password">New Password</label>
 @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>
<div class="col-sm-12 form-field">
<input type="password" id="form_passwordRepeat" name="password_confirmation" required="required" class="form-control" />
<label class="animate-label required" for="form_passwordRepeat">Repeat the new password</label>
</div>
<!-- <div class="col-sm-12 clx-btn-wrapper">
<div class="g-recaptcha" data-sitekey="6LeieEQUAAAAANSazAqXJfzT0yRoah00q6WBeFTZ"></div>
<br />
</div> -->
<div class="col-sm-12 clx-btn-wrapper">
<button type="submit" id="form_save"  class="btn clx-accunt-btn">Reset Password</button>
</div>
<div class="col-sm-6">
<span><a href="/cabinet/register" title="Create account" class="text-right clx-forgot-link pull-left">Create account</a></span>
</div>

</form>
</div>

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Reset Password') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
>>>>>>> a77aef2899e2329b6a18e28de202e0d93eedfbaf
</div>
</div>
>>>>>>> 2544b70de9fa16d5f29055600f0442b3663cd12f
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