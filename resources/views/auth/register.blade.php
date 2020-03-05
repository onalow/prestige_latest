<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="icon" href="{{asset("css/bundles/frontend/images/u.png")}}">
	<title>Registration PIS</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700|Roboto+Slab:100,300,400,700|Roboto:300,400,500,700" rel="stylesheet">

	<link href="{{asset("css/bundles/homepage/css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("bundles/frontend/css/flag-icon.min.css")}}" rel="stylesheet">

	<link href="{{asset("css/bundles/homepage/css/jquery.mmenu.css")}}" rel="stylesheet">
	<link href="{{asset("css/bundles/homepage/css/style.css")}}" rel="stylesheet">
	<link href="{{asset("css/bundles/homepage/css/be-style.css")}}" rel="stylesheet">
</head>
<body class="clx-account-pages">
	<section class="clx-registration-page">
		<canvas id="clx-banner-canvas1"></canvas>
		<div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-right"></div>
		<div class="blockchain-animate blockchain-animate-7 blockchain-animate-7-left"></div>
		<div class="container" style="margin-top: -180px;">
			


			<h1 style="color: white;" class="clx-account-heading text-center">
			Registeration </h1>
			
			
			<div class="clx-form-box">
				<form name="form" method="post" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
					@csrf
					<div class="row">
						<div style="margin-top: 25px;" class="col-sm-6 form-field right-form-field">
							<div class="form-field-box">
								<input style="color: white;" type="text" id="form_username value="{{ old('username')}}" name="username" required="required" class="form-control" />
								<label style="color: white;" class="animate-label required" for="form_username">Username</label>
								@if ($errors->has('username'))
								<span class="help-block">
									<strong>{{ $errors->first('username') }}</strong>
								</span>
								@endif
							</div>
							
						</div>
						<div style="margin-top: 25px;" class="col-sm-6 form-field">
							<div class="form-field-box">
								<input style="color: white;" type="email" value="{{ old('email')}}" id="form_email" name="email" required="required" class="form-control" />
								<label  style="color: white;" class="animate-label required" for="form_email">E-Mail</label>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong style="color: #ffff66">{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
							
						</div>
						<div style="margin-top: 25px;" class="col-sm-6 form-field right-form-field">
							<div class="form-field-box">
								<input style="color: white;" type="password" id="form_password" name="password" required="required" class="form-control" />
								<label style="color: white;" class="animate-label required" for="form_password">Password</label>
								@if ($errors->has('password'))
								<span class="help-block">
									<strong  style="color: #ffff66">{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
							
						</div>
						<div style="margin-top: 25px;" class="col-sm-6 form-field">
							<div class="form-field-box">
								<input style="color: white;" type="password" id="form_passwordRepeat" name="password_confirmation" required="required" class="form-control" />
								<label style="color: white;" class="animate-label required" for="form_passwordRepeat">Repeat password</label>
							</div>
						</div>
						<div class="col-sm-6 form-field right-form-field">
							<div class="form-field-box" >
								<label></label>
								<select id="form_phoneCode" name="phone_code" class="form-control filled select-new" style="color: white;">
									<option value="AD (+376)">AD (+376)</option><option value="AE (+971)">AE (+971)</option><option value="AF (+93)">AF (+93)</option><option value="AG (+1268)">AG (+1268)</option><option value="AI (+1264)">AI (+1264)</option><option value="AL (+355)">AL (+355)</option><option value="AM (+374)">AM (+374)</option><option value="AN (+599)">AN (+599)</option><option value="AO (+244)">AO (+244)</option><option value="AQ (+672)">AQ (+672)</option><option value="AR (+54)">AR (+54)</option><option value="AS (+1684)">AS (+1684)</option><option value="AT (+43)">AT (+43)</option><option value="AU (+61)">AU (+61)</option><option value="AW (+297)">AW (+297)</option><option value="AZ (+994)">AZ (+994)</option><option value="BA (+387)">BA (+387)</option><option value="BB (+1246)">BB (+1246)</option><option value="BD (+880)">BD (+880)</option><option value="BE (+32)">BE (+32)</option><option value="BF (+226)">BF (+226)</option><option value="BG (+359)">BG (+359)</option><option value="BH (+973)">BH (+973)</option><option value="BI (+257)">BI (+257)</option><option value="BJ (+229)">BJ (+229)</option><option value="BL (+590)">BL (+590)</option><option value="BM (+1441)">BM (+1441)</option><option value="BN (+673)">BN (+673)</option><option value="BO (+591)">BO (+591)</option><option value="BR (+55)">BR (+55)</option><option value="BS (+1242)">BS (+1242)</option><option value="BT (+975)">BT (+975)</option><option value="BW (+267)">BW (+267)</option><option value="BY (+375)">BY (+375)</option><option value="BZ (+501)">BZ (+501)</option><option value="CA (+1)">CA (+1)</option><option value="CC (+61)">CC (+61)</option><option value="CD (+243)">CD (+243)</option><option value="CF (+236)">CF (+236)</option><option value="CG (+242)">CG (+242)</option><option value="CH (+41)">CH (+41)</option><option value="CI (+225)">CI (+225)</option><option value="CK (+682)">CK (+682)</option><option value="CL (+56)">CL (+56)</option><option value="CM (+237)">CM (+237)</option><option value="CN (+86)">CN (+86)</option><option value="CO (+57)">CO (+57)</option><option value="CR (+506)">CR (+506)</option><option value="CU (+53)">CU (+53)</option><option value="CV (+238)">CV (+238)</option><option value="CX (+61)">CX (+61)</option><option value="CY (+357)">CY (+357)</option><option value="CZ (+420)">CZ (+420)</option><option value="DE (+49)">DE (+49)</option><option value="DJ (+253)">DJ (+253)</option><option value="DK (+45)">DK (+45)</option><option value="DM (+1767)">DM (+1767)</option><option value="DO (+1809)">DO (+1809)</option><option value="DZ (+213)">DZ (+213)</option><option value="EC (+593)">EC (+593)</option><option value="EE (+372)">EE (+372)</option><option value="EG (+20)">EG (+20)</option><option value="ER (+291)">ER (+291)</option><option value="ES (+34)">ES (+34)</option><option value="ET (+251)">ET (+251)</option><option value="FI (+358)">FI (+358)</option><option value="FJ (+679)">FJ (+679)</option><option value="FK (+500)">FK (+500)</option><option value="FM (+691)">FM (+691)</option><option value="FO (+298)">FO (+298)</option><option value="FR (+33)">FR (+33)</option><option value="GA (+241)">GA (+241)</option><option value="GB (+44)">GB (+44)</option><option value="GD (+1473)">GD (+1473)</option><option value="GE (+995)">GE (+995)</option><option value="GH (+233)">GH (+233)</option><option value="GI (+350)">GI (+350)</option><option value="GL (+299)">GL (+299)</option><option value="GM (+220)">GM (+220)</option><option value="GN (+224)">GN (+224)</option><option value="GQ (+240)">GQ (+240)</option><option value="GR (+30)">GR (+30)</option><option value="GT (+502)">GT (+502)</option><option value="GU (+1671)">GU (+1671)</option><option value="GW (+245)">GW (+245)</option><option value="GY (+592)">GY (+592)</option><option value="HK (+852)">HK (+852)</option><option value="HN (+504)">HN (+504)</option><option value="HR (+385)">HR (+385)</option><option value="HT (+509)">HT (+509)</option><option value="HU (+36)">HU (+36)</option><option value="ID (+62)">ID (+62)</option><option value="IE (+353)">IE (+353)</option><option value="IL (+972)">IL (+972)</option><option value="IM (+44)">IM (+44)</option><option value="IN (+91)">IN (+91)</option><option value="IQ (+964)">IQ (+964)</option><option value="IR (+98)">IR (+98)</option><option value="IS (+354)">IS (+354)</option><option value="IT (+39)">IT (+39)</option><option value="JM (+1876)">JM (+1876)</option><option value="JO (+962)">JO (+962)</option><option value="JP (+81)">JP (+81)</option><option value="KE (+254)">KE (+254)</option><option value="KG (+996)">KG (+996)</option><option value="KH (+855)">KH (+855)</option><option value="KI (+686)">KI (+686)</option><option value="KM (+269)">KM (+269)</option><option value="KN (+1869)">KN (+1869)</option><option value="KP (+850)">KP (+850)</option><option value="KR (+82)">KR (+82)</option><option value="KW (+965)">KW (+965)</option><option value="KY (+1345)">KY (+1345)</option><option value="KZ (+7)">KZ (+7)</option><option value="LA (+856)">LA (+856)</option><option value="LB (+961)">LB (+961)</option><option value="LC (+1758)">LC (+1758)</option><option value="LI (+423)">LI (+423)</option><option value="LK (+94)">LK (+94)</option><option value="LR (+231)">LR (+231)</option><option value="LS (+266)">LS (+266)</option><option value="LT (+370)">LT (+370)</option><option value="LU (+352)">LU (+352)</option><option value="LV (+371)">LV (+371)</option><option value="LY (+218)">LY (+218)</option><option value="MA (+212)">MA (+212)</option><option value="MC (+377)">MC (+377)</option><option value="MD (+373)">MD (+373)</option><option value="ME (+382)">ME (+382)</option><option value="MF (+1599)">MF (+1599)</option><option value="MG (+261)">MG (+261)</option><option value="MH (+692)">MH (+692)</option><option value="MK (+389)">MK (+389)</option><option value="ML (+223)">ML (+223)</option><option value="MM (+95)">MM (+95)</option><option value="MN (+976)">MN (+976)</option><option value="MO (+853)">MO (+853)</option><option value="MP (+1670)">MP (+1670)</option><option value="MR (+222)">MR (+222)</option><option value="MS (+1664)">MS (+1664)</option><option value="MT (+356)">MT (+356)</option><option value="MU (+230)">MU (+230)</option><option value="MV (+960)">MV (+960)</option><option value="MW (+265)">MW (+265)</option><option value="MX (+52)">MX (+52)</option><option value="MY (+60)">MY (+60)</option><option value="MZ (+258)">MZ (+258)</option><option value="NA (+264)">NA (+264)</option><option value="NC (+687)">NC (+687)</option><option value="NE (+227)">NE (+227)</option><option value="NG (+234)">NG (+234)</option><option value="NI (+505)">NI (+505)</option><option value="NL (+31)">NL (+31)</option><option value="NO (+47)">NO (+47)</option><option value="NP (+977)">NP (+977)</option><option value="NR (+674)">NR (+674)</option><option value="NU (+683)">NU (+683)</option><option value="NZ (+64)">NZ (+64)</option><option value="OM (+968)">OM (+968)</option><option value="PA (+507)">PA (+507)</option><option value="PE (+51)">PE (+51)</option><option value="PF (+689)">PF (+689)</option><option value="PG (+675)">PG (+675)</option><option value="PH (+63)">PH (+63)</option><option value="PK (+92)">PK (+92)</option><option value="PL (+48)">PL (+48)</option><option value="PM (+508)">PM (+508)</option><option value="PN (+870)">PN (+870)</option><option value="PR (+1)">PR (+1)</option><option value="PT (+351)">PT (+351)</option><option value="PW (+680)">PW (+680)</option><option value="PY (+595)">PY (+595)</option><option value="QA (+974)">QA (+974)</option><option value="RO (+40)">RO (+40)</option><option value="RS (+381)">RS (+381)</option><option value="RU (+7)">RU (+7)</option><option value="RW (+250)">RW (+250)</option><option value="SA (+966)">SA (+966)</option><option value="SB (+677)">SB (+677)</option><option value="SC (+248)">SC (+248)</option><option value="SD (+249)">SD (+249)</option><option value="SE (+46)">SE (+46)</option><option value="SG (+65)">SG (+65)</option><option value="SH (+290)">SH (+290)</option><option value="SI (+386)">SI (+386)</option><option value="SK (+421)">SK (+421)</option><option value="SL (+232)">SL (+232)</option><option value="SM (+378)">SM (+378)</option><option value="SN (+221)">SN (+221)</option><option value="SO (+252)">SO (+252)</option><option value="SR (+597)">SR (+597)</option><option value="ST (+239)">ST (+239)</option><option value="SV (+503)">SV (+503)</option><option value="SY (+963)">SY (+963)</option><option value="SZ (+268)">SZ (+268)</option><option value="TC (+1649)">TC (+1649)</option><option value="TD (+235)">TD (+235)</option><option value="TG (+228)">TG (+228)</option><option value="TH (+66)">TH (+66)</option><option value="TJ (+992)">TJ (+992)</option><option value="TK (+690)">TK (+690)</option><option value="TL (+670)">TL (+670)</option><option value="TM (+993)">TM (+993)</option><option value="TN (+216)">TN (+216)</option><option value="TO (+676)">TO (+676)</option><option value="TR (+90)">TR (+90)</option><option value="TT (+1868)">TT (+1868)</option><option value="TV (+688)">TV (+688)</option><option value="TW (+886)">TW (+886)</option><option value="TZ (+255)">TZ (+255)</option><option value="UA (+380)">UA (+380)</option><option value="UG (+256)">UG (+256)</option><option value="US (+1)">US (+1)</option><option value="UY (+598)">UY (+598)</option><option value="UZ (+998)">UZ (+998)</option><option value="VA (+39)">VA (+39)</option><option value="VC (+1784)">VC (+1784)</option><option value="VE (+58)">VE (+58)</option><option value="VG (+1284)">VG (+1284)</option><option value="VI (+1340)">VI (+1340)</option><option value="VN (+84)">VN (+84)</option><option value="VU (+678)">VU (+678)</option><option value="WF (+681)">WF (+681)</option><option value="WS (+685)">WS (+685)</option><option value="XK (+381)">XK (+381)</option><option value="YE (+967)">YE (+967)</option><option value="YT (+262)">YT (+262)</option><option value="ZA (+27)">ZA (+27)</option><option value="ZM (+260)">ZM (+260)</option><option value="ZW (+263)">ZW (+263)</option></select>
								</div>
							</div>
							<div style="margin-top: 25px;" class="col-sm-6 form-field" >
								<div class="form-field-box" >
									<input style="color: white;" type="text" id="form_phone" value="{{ old('phone')}}" name="phone" required="required" class="form-control" />
									<label style="color: white;" class="animate-label required" for="form_phone">Phone number</label>
									@if ($errors->has('phone'))
									<span class="help-block">
										<strong  style="color: #ffff66">{{ $errors->first('phone') }}</strong>
									</span>
									@endif

								</div>
							</div>
							<div style="margin-top: 25px;" class="col-sm-6 form-field right-form-field">
								<div class="form-field-box">
									<input style="color: white;" type="text" id="sponsor" value="{{ old('sponsorID', isset($_GET['sponsor']))? $_GET['sponsor'] : ''}}" name="sponsorID"  class="form-control" />
									<label style="color: white;" class="animate-label required" for="form_username">Referral Code</label>
									@if ($errors->has('sponsorID'))
									<span class="help-block">
										<strong  style="color: #ffff66">{{ $errors->first('sponsorID') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<div class="col-sm-6 clx-forgot-pass form-field">
								<div class="clx-ckeck-box">
									<label class="clx-check-action">
										<input type="checkbox" name="tos" >
										<span class="clx-checkbox-style"></span>
									</label>
									<span class="text-center clx-remember-text">I have read and agree to the<br /><a href="{{asset("css/bundles/homepage/docs/terms-conditions.pdf")}}" target="_blank">Terms of Use</a> and <a href="{{-- {{asset("css/bundles/homepage/docs/privacy-policy.pdf")}} --}}javascript:void(0)" target="_blank">Privacy Policy</a>.</span>
									@if ($errors->has('tos'))
									<br><span class="help-block">
										<strong  style="color: #ffff66">{{ $errors->first('tos') }}</strong>
									</span>
									@endif
								</div>
							</div>
{{-- 						<div class="col-sm-6 clx-recaptcha form-field right-form-field">
							<div class="form-field-box">
								<div class="g-recaptcha" data-sitekey="6LeieEQUAAAAANSazAqXJfzT0yRoah00q6WBeFTZ"></div>
							</div>
						</div> --}}
						<button type="submit" id="form_save"  class="col-4 btn clx-accunt-btn d-block mx-auto" style="margin-top: 20px;">Register</button> <br>
					
						<div class="col-sm-12 text-center">
							<span style="color: white">
								<a class="btn" style="color: white; text-decoration: underline; font-weight: 700;" href="/" title="Log In">CANCEL</a></span>
							</div>
							<div class="col-sm-12 text-center">
								<span style="color: white">Already have an account? 
									<a style="color: white; text-decoration: underline; font-weight: 700;" href="/login" title="Log In">LOGIN</a></span>
								</div>


							</div>
						</div>
						{{-- 	<input type="hidden" id="form__token" name="form[_token]" value="SvbRu8PiZG9NMihA2S_EjZMa6Z0lUTRWFxzyBA3WYfM" /> --}}
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="{{asset("css/bundles/homepage/js/jquery.min.js")}}"></script>
	{{-- <script src="{{asset("css/bundles/homepage/js/tether.min.js")}}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
	<script src='{{asset("css/bundles/homepage/js/zepto.min.js")}}'></script>
	{{-- <script src='{{asset("css/bundles/homepage/js/Stats.js")}}'></script> --}}
	{{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
	<script src="{{asset("css/bundles/homepage/js/bootstrap.min.js")}}"></script>

	<script src="{{asset("css/bundles/homepage/js/ie10-viewport-bug-workaround.js")}}"></script>
	<script src="{{asset("css/bundles/homepage/js/jquery.mmenu.js")}}"></script>
	{{-- <script src="{{asset("css/bundles/homepage/js/particles.min.js")}}"></script> --}}
	<script src="{{asset("css/bundles/homepage/js/jquery.cookie.js")}}"></script>
	<script src="{{asset("css/bundles/homepage/js/clx-home.js")}}"></script>
	<script src="{{asset("css/bundles/homepage/js/clx-custom.js")}}"></script>
	<script src="{{asset("css/bundles/homepage/js/be-clx-custom.js")}}"></script>
</body>
</html>