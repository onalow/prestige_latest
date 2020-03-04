<header id="header" class="cld-header">
	<div class="cld-main-container">
		<div class="container cld-header-top">
			<div class="row">
				<div class="col-sm-4 cld-time" style="padding-top: 30px;">
					{{-- <p class="cld-timer"><i class="fa fa-clock-o"></i> --}}
						{{-- <span class="serverClock" style="display:none;">2018/08/22 {{date('H:i:s')}}</span> --}}
					</p>
				</div>

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
							<a class="btn btn-link dropdown-toggle" href="#" role="button" id="cldUserDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ auth()->user()->username}} </a>
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


			</div>
		</div>
	</div>

</div>
</header>
