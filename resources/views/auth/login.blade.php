<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="icon" href="{{asset("css/bundles/frontend/images/u.png")}}">
  <title>Login PIS</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700|Roboto+Slab:100,300,400,700|Roboto:300,400,500,700" rel="stylesheet">

  <link href="{{asset("css/bundles/homepage/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("css/bundles/frontend/css/flag-icon.min.css")}}" rel="stylesheet">

  <link href="{{asset("css/bundles/homepage/css/jquery.mmenu.css")}}" rel="stylesheet">
  <link href="{{asset("css/bundles/homepage/css/style.css")}}" rel="stylesheet">
  <link href="{{asset("css/bundles/homepage/css/be-style.css")}}" rel="stylesheet">
</head>
<body class="clx-account-pages">
  <section class="clx-login-page">
    <canvas id="clx-banner-canvas1"></canvas>
    {{-- <div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-right"></div>
    <div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-left"></div> --}}
    <div class="container">
      <div class="clx-account-bg" style="margin-top: -150px">
{{--         <div class="clx-account-logo text-center">
         <a style="font-size: 40px; color: white; font-weight: bold;" href="/">PIS</a>
       </div> --}}
       <div class="clx-account-logo text-center">
        <a href="/"><img src="{{asset("css/bundles/frontend/images/s.png")}}" alt="PIS" title="PIS"></a>
      </div>
      <h1 class="clx-account-heading text-center">
      Log In </h1>
      <div class="clx-form-box">
        <form name="form" method="post" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
          @csrf
          <div class="row ">
            <div class="col-sm-12 form-field">
              <input type="text" id="form_input" name="login" value="{{ old('login')}}" required="required" class="form-control" />
              <label class="animate-label required" for="form_input">Username or E-Mail</label>
              @if ($errors->has('login'))
              <span class="help-block">
                <strong>{{ $errors->first('login') }}</strong>
              </span>
              <p>Ensure your account is verified <a href="{{route('reverify', encrypt(old('login', 'nil')))}}"> Resend Verification email?</a></p>
              @endif
            </div>
            <div class="col-sm-12 form-field">
              <input type="password" id="form_password" name="password" required="required" class="form-control" />
              <label class="animate-label required" for="form_password">Password</label>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
{{--                 <div class="col-sm-12 clx-btn-wrapper">
                  <div class="g-recaptcha" data-sitekey="6LeieEQUAAAAANSazAqXJfzT0yRoah00q6WBeFTZ" style="width: 304px;
                  margin: 0 auto;"></div>
                  <br />
                </div> --}}
                <div class="col-sm-12 clx-btn-wrapper">
                  <button type="submit" id="form_save"  class="btn clx-accunt-btn">Log in</button>
                </div>
                <div class="col-sm-12">
                  <div class="clearfix"></div>
                  <br />
                </div>
                <div class="col-sm-6">
                  <span><a href="/register" title="Create account" class="text-right clx-forgot-link pull-left">Create account</a></span>
                </div>
                <div class="col-sm-6">
                  <span> <a href="{{ route('password.request') }}" class="clx-forgot-link pull-right">Forgot Password?</a></span>
                </div>
                {{-- <input type="hidden" id="form__token" name="form[_token]" value="SvbRu8PiZG9NMihA2S_EjZMa6Z0lUTRWFxzyBA3WYfM" /> --}}
              </form>
            </div>
          </div>
        </div>
      </section>
      <script src="{{asset("css/bundles/homepage/js/jquery.min.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/tether.min.js")}}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src='{{asset("css/bundles/homepage/js/zepto.min.js")}}'></script>
      {{-- <script src='{{asset("css/bundles/homepage/js/Stats.js")}}'></script> --}}
      <script src="{{asset("css/bundles/homepage/js/bootstrap.min.js")}}"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>

      <script src="{{asset("css/bundles/homepage/js/ie10-viewport-bug-workaround.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/jquery.mmenu.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/particles.min.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/clx-home.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/clx-custom.js")}}"></script>
      <script src="{{asset("css/bundles/homepage/js/be-clx-custom.js")}}"></script>
    </body>
    </html>