@extends('cabinet.layout.fake_app')
@section('content')
{{-- @php $user = auth()->user(); @endphp --}}
<div id="right_content" class="cld-right-content col-lg-9">
	<div class="cld-inner-content">
		<div class="cld-white-box mb-3 cld-box-padding">
			<div class="row cld-rank-box ">
				<div class=" col-sm-6 cld-bronze" style="margin-bottom: 50px;">
					<div class="media position-relative">
						<img class="mr-3" src="{{asset("css/bundles/frontend/images/trophy-icon.png")}}" alt="">
						<div class="media-body">
							<span>Current Plan <strong>{{$fake->plan}}</strong></span>
						</div>
					</div>
				</div>
				<div class=" col-sm-6 cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Total Investment <strong><span style="color: black;">$</span>{{number_format($fake->total_investment, 2)}}
							</strong></span>
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Current Earning <strong><span style="color: black;">$</span>
								{{ number_format($fake->current_earning, 2)}}
							</strong></span>
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>Total Earnings <strong>{{number_format($fake->total_earning, 2)}}</strong></span>
						</div>
					</div>
				</div>


				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>NFP Investment <strong>{{ number_format($fake->nfp_investment, 2)}} </strong></span>
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>NFP Profit<strong>{{ number_format($fake->nfp_profit, 2) }} </strong></span>
						</div>
					</div>
				</div>
				
				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>Referrals <strong>{{$fake->referrals}}</strong></span>
						</div>
					</div>
				</div>
				<div class=" col-sm-6  cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Ref. Bonus <strong><span style="color: black;">$</span>
								{{ number_format($fake->referral_bonus, 2)}}
							</strong></span>
						</div>
					</div>
				</div>




			</div>
		</div>





		<div class="cld-blue-box cld-reinvest-block" style="background-color: #2A3F54">
			<h2>Crypto Investment <span>> ></span></h2>

			<a href="{{ route('buy')}}" class="clb-investment-btn text-uppercase">
			Invest now</a>
		</div>

		<div class="row cld-form-box">
			<div class="col-md-6 offset-md-3 cld-form pr-6-half">
				<div class="cld-form-inner be-min-height-350">
					<div class="row">
						<div class="col-sm-4">
							<span class="cld-fsmall-title">My team</span>
						</div>
						<div class="col-sm-4 cld-logo-wrap text-center">
							<a href="#" class="form-logo"><img src="{{asset("css/bundles/frontend/images/bronze_img_only.png")}}" class="img-fluid" alt=""></a>
							<p>{{ $fake->username}}</p>
						</div>
					</div>
					<form>
						<div class="form-group">
							<label>Partner link</label>
							<div class="input-group">
								<input type="text" class="form-control" id="partnerLink" value="http:prestigeinvestmentservices/register?sponsor=PR-CF7011ADP7D0" readonly>
								<input class="btn copyButton" type="button" data-clipboard-target="#partnerLink" value="Copy" />
							</div>
						</div>
																{{-- <div class="form-group">
																	<label>Partner link</label>
																	<div class="input-group">
																		<input type="text" class="form-control" id="partnerLink2" value="{{ auth()->user()->referral_link}}" readonly>
																		<input class="btn copyButton" type="button" data-clipboard-target="#partnerLink2" value="Copy" />
																	</div>
																</div> --}}
																<div class="form-group">
																	<p class="text-center cld-member-count">Team Member : {{$fake->referrals}}</p>
																</div>
															</form>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>


						@endsection