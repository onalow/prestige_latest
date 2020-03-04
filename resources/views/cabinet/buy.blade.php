@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">
	<div class="row">

		@isset($category)

		<div class="col-sm-6 offset-sm-3 pl-6-half">
			<div class="cld-white-box" style="min-height: 70px">
				<div class="cld-pakages-box">
					<input type="hidden" id="currentUserPercentage" value="0.0232" />
					<input type="hidden" id="currentTargetPercentage" value="1.5" />
					<h2>
						<span class="cld-dis-block">Investment Plan</span>
						<text class="dailyPayment">{{$category->name}}</text>
					</h2>
					<div class="cld-pakages-details">

						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tbody>
								<tr class="even">
									<td><span>ROI</span></td>

									@if ($category->type == "nfp")
									<td><strong>{{ $category->roi}}% Payout </strong></td>
									@else
									<td><strong>{{ $category->roi}}% Payout - {{$category->weeks}} week{{$category->weeks >1 ? 's': ''}}</strong></td>
									@endif

									
								</tr>
								<tr class="odd">
									<td>
										<span>Minimum Deposit </span>
									</td>
									<td><strong class="daysLeft">${{ number_format($category->min_amount,2)}}</strong></td>
								</tr>
								<tr class="even">
									<td>
										<span>Maximum Deposit</span>
									</td>
									<td>
										<strong class="dailyProfitPercentage">${{ number_format($category->max_amount, 2)}}</strong>
									</td>
								</tr>
								<tr class="odd">
									<td><span>Indenture Duration </span>
									</td>

									@if ($category->type == "nfp")
									<td>
										<strong class="dailyProfitPercentage">3 Days Trade</strong>
									</td>
									@else
									<td>
										<strong class="dailyProfitPercentage">{{ $category->duration}} days</strong>
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
						<form name="form" method="post" action="{{route('invest.process')}}">
							@csrf
							<br />
							<div class="form-group">
								<input type="text" id="form_amount" name="amount" required="required" value="{{ old('amount')}}" 
								class="form-control reinvestAmountValue" placeholder="Amount in USD" />
								@if($errors->has('amount'))
								<span class="help-block text-red">{{ $errors->first('amount')}}</span>
								@endif
							</div>
							<input type="hidden" name="category" value="{{ $category->id}}">
							<button type="submit" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Continue</button>
							{{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

						</form>
					</div>
				</div>
			</div>
		</d>
		@endisset

{{-- 			<div class="col-sm-6 pr-6-half">
				<div class="cld-blue-box cld-trading-package-box" style="min-height: 70px">
					<div class="media">

						<img class="userCreditIcon" src="/bundles/frontend/images/big-wallet-icon-btc.png" alt="">
						<div class="media-body">
							<span>USD Balance
								<strong class="userCreditAmount">563,670
									<span>USD</span></strong></span>
								</div>
								<a href="/cabinet/deposit" class="btn btn-clx btn-light" title="Make Deposit"><i class="cl-icon cl-icon-switch-small"></i> Deposit </a>
							</div>
						</div>
					</div> --}}
				</div>


			</div>
		</div>
	</div>


</section>

@endsection
