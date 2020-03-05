
<footer id="footer" style="padding-top:20px;">

	<div class="container">



		<div class="">
			<img style="width: 153px; height: 93px;"class="img-responsive d-block mx-auto" src="{{asset("css/bundles/frontend/images/s.png")}}" alt="">
			

			{{-- <div class="col-sm-6 offset-sm-3 text-center">
				<img img class="img-responsive" src="{{asset("css/bundles/homepage/landing/assets/img/svg/royal-coat-of-arms-white.svg")}}" alt="">
			</div> --}}

		</div>
		<div class="text-center" style="margin-top: 30px;">

			
			<h6> <i class="fa fa-phone" aria-hidden="true"></i><a style="color: white;" href="tel:+1(703) 348-2080"> +1(703) 348-2080 </a></h6>
			<h6><i class="fa fa-envelope" aria-hidden="true"></i> <a style="color: white;" href="mailto:admin@prestigeinvestmentservices.com"> admin@prestigeinvestmentservices.com</a></h6>
			<h6> <i class="fa fa-map-marker" aria-hidden="true"></i> TD Canada Trust Tower,161 Bay Street,26th Floor,Toronto,Ontario,M5J 2S1</h6>
		</div>
		<div class="row mt-md-4 mb-md-5" style="margin-top: 30px;">
			<div class="col-6">
				{{-- <h4>Quick Links</h4> --}}
				<ul class=" row list-unstyled footer-links">
					<li class="d-block col-12" style="display: block;">
						<a href="/">Home</a>
					</li>

					<li class="d-block col-12">
						<a href="/faq">FAQ</a>
					</li>
					<li class="d-block col-12">
						<a href="{{ route('show.packages')}}">Investments</a>
					</li>

				</ul>
			</div>

			<div class="col-6 ">
				{{-- <h4>Quick Links</h4> --}}
				<ul class="row list-unstyled footer-links align-items-right">

					<li class="d-block col-12">
						<a href="/login">Login</a>
					</li>
					<li class="col-12">
						<a href="/register">Register</a>
					</li>
					<li class="col-12">
						<a href="/login">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-sm-12">
					Copyright © 2017
					- All Rights Reserved
					<span class="sep">/</span> <a href="javascript:void(0)">Privacy Policy</a>
					<span class="sep">/</span> <a href="{{asset("css/bundles/homepage/docs/terms-conditions.pdf")}}" target="_blank">Terms and Conditions</a>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<ul class="list-inline social-links">
						<li>
							<a class="icon" href="/login" ><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a class="icon" href="/login" ><i class="fa fa-linkedin-in"></i></a>
						</li>
						<li>
							<a class="icon" href="/login" ><i class="fa fa-facebook"></i></a>
						</li>
					{{-- 	<li>
							<a href="#main" ><i class="fa fa-google-plus"></i></a>
						</li>
						<li>
							<a href="#main" ><i class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a href="#main" ><i class="fa fa-twitter"></i></a>
						</li> --}}
						<li>
							<a href="/login" ><i class="fa fa-send"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
