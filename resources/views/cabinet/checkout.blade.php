@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">
	<div class="row">

		@isset($investment)

		<div class="col-sm-6 offset-sm-3 pl-6-half">
			<div class="cld-white-box" style="min-height: 70px">
				<div class="cld-pakages-box">
					<input type="hidden" id="currentUserPercentage" value="0.0232" />
					<input type="hidden" id="currentTargetPercentage" value="1.5" />
					<h2>
						<span class="cld-dis-block">Investment Plan</span>
						<text class="dailyPayment">{{$investment->category->name}}</text>
					</h2>
					<div class="cld-pakages-details">

						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tbody>
								<tr class="even">
									<td><span>ROI</span></td>


									@if ($investment->category->type == "nfp")
									<td><strong>{{ $investment->category->roi}}% Payout </strong></td>
									@else
									<td><strong>{{ $investment->category->roi}}% Payout - {{$investment->category->weeks}} week{{$investment->category->weeks >1 ? 's': ''}}</strong></td>
									@endif

									
								</tr>
								<tr class="odd">
									<td>
										<span>{{-- Minimum Deposit  --}} Amount</span>
									</td>
									<td><strong class="daysLeft">${{ number_format($investment->amount,2)}}</strong></td>
								</tr>
								
								<tr class="odd">
									<td><span>Indenture Duration </span>
									</td>

									@if ($investment->category->type == "nfp")
									<td>
										<strong class="dailyProfitPercentage">3 Days Trade</strong>
									</td>
									@else
									<td>
										<strong class="dailyProfitPercentage">{{ $investment->category->duration}} days</strong>
									</td>
									@endif

									
								</tr>
								<tr class="even">
									<td>
										<span>24/7 Support</span>
									</td>
									<td><strong class="targetVolume">Yes</strong></td>
								</tr>
							</tbody>
						</table>
						<div class="progress investBarMax">
							<div class="progress-bar investBar" role="progressbar" style="width:95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Amount
							</div>
						</div>
						
						<a href="{{$link_transaction}}" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Pay with Bitcoin</a>
						@if (! isset($hide_card))
						<a href="{{ route('pay.card', [encrypt($investment->id), 'payment_method'=>'card', 'ref_number' => $link_transaction])}}" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Pay with Card</a>
						@endif
						{{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

					</div>
				</div>
			</div>
			@endisset


		</div>

	</div>

</div>

</section>

@endsection
