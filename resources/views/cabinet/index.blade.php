@extends('cabinet.layout.app')
@section('content')
@php $user = auth()->user(); @endphp
<div id="right_content" class="cld-right-content col-lg-9">
	<div class="cld-inner-content">
		<div class="cld-white-box mb-3 cld-box-padding">
			<div class="row cld-rank-box ">
				<div class=" col-sm-6 cld-bronze" style="margin-bottom: 50px;">
					<div class="media position-relative">
						<img class="mr-3" src="{{asset("css/bundles/frontend/images/trophy-icon.png")}}" alt="">
						<div class="media-body">
							<span>Current Plan <strong>{{$user->plan() ? $user->plan()->category->name .'-Amount: '. '$'.number_format($user->plan()->amount, 2)  : 'None'}}</strong></span>
						</div>
					</div>
				</div>
				<div class=" col-sm-6 cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Total Investment <strong><span style="color: black;">$</span>{{number_format($user->totalInvestment(), 2)}}
							</strong></span>
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Current Earning <strong><span style="color: black;">$</span>
								{{ number_format($user->activePlans()->sum('earning'), 2)}}
							</strong></span>
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>Total Earnings <strong>${{ $user->totalEarning ? number_format($user->totalEarning->amount, 2) : 0}}</strong></span>
						</div>
					</div>
				</div>



				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							@if (Auth::user()->id == 21)
							<span>NFP Investment <strong>$20,100.00</strong></span>
							@else
							<span>NFP Investment <strong>${{ $user->nfp() ?  number_format($user->nfp()->amount, 2) : '0.0'}}</strong></span>
							@endif
							
						</div>
					</div>
				</div>

				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							@if (Auth::user()->id == 21)
							<span>NFP Profit<strong>$27,500.00</strong></span>
							@else
							<span>NFP Profit<strong>${{$user->nfp() ? number_format($user->nfp()->cum_earning, 2) :'0.0' }}</strong></span>
							@endif
							
							{{-- <span>NFP Profit<strong>${{$user->nfp() ? number_format($user->nfp()->cum_earning, 2) :'0.0' }}</strong></span> --}}
						</div>
					</div>
				</div>
				
				<div class=" col-sm-6  cld-team" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/team-icon.png")}}" alt="">
						<div class="media-body">
							<span>Referrals <strong>{{$user->referrals()->count()}}</strong></span>
						</div>
					</div>
				</div>
				<div class=" col-sm-6  cld-invest" style="margin-bottom: 50px;">
					<div class="media">
						<img class="mr-3 ml-3" src="{{asset("css/bundles/frontend/images/invest-icon.png")}}" alt="">
						<div class="media-body">
							<span>Ref. Bonus <strong><span style="color: black;">$</span>
								{{ number_format($user->bonuses()->sum('amount'), 2)}}
							</strong></span>
						</div>
					</div>
				</div>




			</div>
		</div>




		<div class="cld-blue-box cld-reinvest-block" style="background-color: #2A3F54">
			<h2>Investment Plans <span>> ></span></h2>
													{{-- <a href="javascript:0;" class="clb-investment-btn text-uppercase be-hidden-mobile videoTutorial" style="margin-left: 15px;">
													Tutorial</a> --}}
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
																<div id="ref" class="col-sm-4 cld-logo-wrap text-center">
																	<a href="#" class="form-logo"><img src="{{asset("css/bundles/frontend/images/bronze_img_only.png")}}" class="img-fluid" alt=""></a>
																	<p>{{ auth()->user()->username}}</p>
																</div>
															</div>
															<form>
																<div class="form-group">
																	<label>Partner link</label>
																	<div class="input-group">
																		<input type="text" class="form-control" id="partnerLink" value="{{ auth()->user()->referral_link}}" readonly>
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
																	<p class="text-center cld-member-count">Team Member : {{$user->referrals()->count()}}</p>
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

						<!-- Button trigger modal -->
{{-- 						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
							Launch demo modal
						</button> --}}

						<!-- Modal -->
{{-- 						<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div> --}}
						@endsection