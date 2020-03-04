<header id="header" class="cld-header">
	<div class="cld-main-container">
		<div class="container cld-header-top">
			<div class="row">
				<div class="col-sm-4 cld-time" style="padding-top: 30px;">
					{{-- <p class="cld-timer"><i class="fa fa-clock-o"></i> --}}
						{{-- <span class="serverClock" style="display:none;">2018/08/22 {{date('H:i:s')}}</span> --}}
					</p>
				</div>
{{-- 				<div class="col-sm cld-address-top be-hidden-mobile"><a href="javascript:void(0);"><i class="fa fa-dollar"></i>
					<strong>USD:</strong> X415104699385484</a>
				</div>
				<div class="col-sm cld-address-top be-hidden-mobile"><a href="javascript:void(0);"><i class="cl-icon cl-icon-clx"></i>
					<strong>CLX:</strong> C523603B1FB3A0CLX10C82203DBF2AD3</a>
				</div> --}}
				<div class="col-sm-3 text-right cld-user-info" style="padding-top: 5px; margin-top: 5px;">
					<div class="d-inline-block clx-menu-icon navbar-toggler" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
						<div class="clx-hamburger d-inline-block">
							<span class="clx-line"></span>
							<span class="clx-line"></span>
							<span class="clx-line"></span>
						</div>
					</div>
					<div class="btn-group clx-action-btns">
						<div class="dropdown show">
							<a class="btn btn-link " href="/" role="button" id="englishDropdown"  aria-haspopup="true" >Home</a>

						</div>
					</div>
					<div class="btn-group clx-action-btns text-center">
						<div class="dropdown show">
							<a class="btn btn-link dropdown-toggle" href="#" role="button" id="cldUserDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{$fake->username}}</a>
							<div class="dropdown-menu dropdown" aria-labelledby="cldUserDropdown">
								<a class="dropdown-item" href="{{ route('profile.show')}}">Settings</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Sign Out') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</div>
				</div>

{{-- 				<div class="btn-group clx-action-btns">
					<div class="dropdown show">
						<a class="btn btn-link dropdown-toggle" href="#" role="button" id="englishDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
						<div class="dropdown-menu" aria-labelledby="englishDropdown">
							<a href="/cabinet/locale/AR" class="dropdown-item">
								<span class="flag-icon flag-icon-ae"></span> AR
							</a>
							<a href="/cabinet/locale/CN" class="dropdown-item">
								<span class="flag-icon flag-icon-cn"></span> CN
							</a>
							<a href="/cabinet/locale/DE" class="dropdown-item">
								<span class="flag-icon flag-icon-de"></span> DE
							</a>
							<a href="/cabinet/locale/EN" class="dropdown-item">
								<span class="flag-icon flag-icon-gb"></span> EN
							</a>
							<a href="/cabinet/locale/ES" class="dropdown-item">
								<span class="flag-icon flag-icon-es"></span> ES
							</a>
							<a href="/cabinet/locale/FR" class="dropdown-item">
								<span class="flag-icon flag-icon-fr"></span> FR
							</a>
							<a href="/cabinet/locale/ID" class="dropdown-item">
								<span class="flag-icon flag-icon-id"></span> ID
							</a>
							<a href="/cabinet/locale/IN" class="dropdown-item">
								<span class="flag-icon flag-icon-in"></span> IN
							</a>
							<a href="/cabinet/locale/IR" class="dropdown-item">
								<span class="flag-icon flag-icon-ir"></span> IR
							</a>
							<a href="/cabinet/locale/IT" class="dropdown-item">
								<span class="flag-icon flag-icon-it"></span> IT
							</a>
							<a href="/cabinet/locale/JP" class="dropdown-item">
								<span class="flag-icon flag-icon-jp"></span> JP
							</a>
							<a href="/cabinet/locale/KR" class="dropdown-item">
								<span class="flag-icon flag-icon-kr"></span> KR
							</a>
							<a href="/cabinet/locale/RU" class="dropdown-item">
								<span class="flag-icon flag-icon-ru"></span> RU
							</a>
							<a href="/cabinet/locale/TR" class="dropdown-item">
								<span class="flag-icon flag-icon-tr"></span> TR
							</a>
							<a href="/cabinet/locale/VN" class="dropdown-item">
								<span class="flag-icon flag-icon-vn"></span> VN
							</a>
						</div>
					</div>
				</div> --}}

			</div>
		</div>
	</div>

</div>
</header>
