<!DOCTYPE html>
<html lang="en">
@include('cabinet.layout.head')
<body>

	@include('cabinet.layout.topmenu')
	<section class="cld-main-continer">
		<div class="container">
			<div class="cld-header-main">
				<div class="row cld-get-clx-wrap">
					<div class="col-lg-7 col-sm-8 cld-progress-bar">
						<p class="text-center mt-3">PIS ADMIN SUITE &nbsp;&nbsp;>>
						</p>
						<p style="font-size: 15px;text-align: center">Take the wheel!</p>

						<p style="font-size: 15px;text-align: center">Total Control</p>
					</div>

				</div>
			</div>
			<div class="wrapper">
				<div class="row cld-row-strech">

					{{-- <input type="hidden" style="display: none" class="hidden" value="2018/08/22 02:39:17" id="currentServerTime" /> --}}
					@include('cabinet.layout.adminmenu')

					@yield('content')
					@include('cabinet.layout.footer')
				</body>
				</html>