@extends('layouts.site.app')
@section('content')
<div id="main">
	<section class="section hero sub">
		<div class="container content-top" >
			<div class="row">
				<div class="col-md-6 mx-auto text-center">
					<h1>Frequently Asked Questions</h1>
				</div>
			</div>
		</div>
		<div class="curved_border"></div>
	</section>
	<section class="section pb-0 pt-0" style="margin-top:-20px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 mx-auto">
					<div class="accordion" id="accordion">
						<div class="card active" data-card="#collapseOne">
							<div class="card-header" id="headingOne">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-minus-circle"></i></button>
								<h5 class="mb-0">
									What are the investment opportunities? 
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									Prestige Investment Services brings a whole set of exciting investment opportunities Like earning profits from out cryptocurrency investment Plans, Non-Farm Payroll(NFP), cloudmining and others.You also have the opportunity to earn awesome bonuses from our referral system.
								</div>
							</div>
						</div>

						<div class="card" data-card="#collapseThree">
							<div class="card-header" id="headingThree">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">				
									How to participate and make profits
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Registering with Prestige Investment Services is simple: you just need to go to the Registration section of the website and follow the instructions there.PIS has basically got everything all figured out with the aid of Her automated system so clients only need to choose their preferred package,either the normal investment plans or the Non-Farm Payroll(NFP) investment Plans and watch their dashboard get credited  automatically.
								</div>
							</div>
						</div>
						<div class="card" data-card="#collapseFour">
							<div class="card-header" id="headingFour">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">
									How can I deposit? 
								</h5>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body">
									From the deposit page,choose your most preffered means of depositing and proceed to make payment.Your payment is automatically confirmed and your dashboard is credited.
								</div>
							</div>
						</div>
						<div class="card" data-card="#collapseFive">
							<div class="card-header" id="headingFive">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">
									How can I withdraw? 
								</h5>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
								<div class="card-body">
									Whenever,you can submit a cash-out on the “withdraw” page,depending on your contract,and it’s being processed within minutes.
								</div>
							</div>
						</div>
						<div class="card" data-card="#collapseSix">
							<div class="card-header" id="headingSix">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">
									What is minimum deposit and withdraw amounts?
								</h5>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
								<div class="card-body">
									The minimum deposit for our normal investment plans is $500 while the minimum investment for our Non-Farm Payroll(NFP) plans is $20,000. We have no minimum withdrawal.
								</div>
							</div>
						</div>
						<div class="card" data-card="#collapseSix2">
							<div class="card-header" id="headingSix2">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix2"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">
									Can I lose money by investing with Prestige Investment Services?
								</h5>
							</div>
							<div id="collapseSix2" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
								<div class="card-body">
									With our high level of expertise and professionalism,also having solid financial backing from our sponsor organizations,there is no risk of losing your money with us.
								</div>
							</div>
						</div>



						<div class="card" data-card="#collapseTwelve">
							<div class="card-header" id="headingTwelve">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwelve"><i class="fa fa-plus-circle"></i></button>
								<h5 class="mb-0">
									How do I can contact support?
								</h5>
							</div>
							<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
								<div class="card-body">
									Embedded on our website is a live chat widget where you can talk with us. Get in touch with our Support via E-mail at <strong>admin@prestigeinvestmentservices.com</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
{{-- 	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 mx-auto text-center">
					<div class="contact d-flex justify-content-center align-items-center">
						<div class="rotating"></div>
						<div class="rotating two"></div>
						<span>
							<h2 class="mb-5">Got A Question?</h2>
							<a href=""> <button class="btn btn-lg btn-icon btn-primary mx-auto text-uppercase">Drop us your message
								<i class="fa fa-arrow-circle-right"></i></button></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
	</div>
	@endsection