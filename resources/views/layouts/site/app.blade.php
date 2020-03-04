<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style=" scroll-behavior: smooth; margin: 0; padding: 0;  height: 100%;">
@include('layouts.site.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<body style=" margin: 0; padding: 0;  ">

{{-- background: url('css/bundles/frontend/images/wines.jpeg') no-repeat center center fixed; --}}
	<div class="page-loader"></div>

	<div id="wrapper" style="padding-right: 0;">

		@include('layouts.site.menu')

		@yield('content')

		@include('layouts.site.footer')

	</div>
	
	@include('layouts.site.js')

	<!-- ================== Footer  ================== -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc1c83f08387933e5bb3178/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>