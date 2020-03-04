@extends('cabinet.layout.app')
@section('content')
<div id="right_content" class="cld-right-content col-lg-9">
	<div class="cld-inner-content">
		<div class="row mb-3 cld-wallet-box">

		</div>
		<div class="row mb-3 cld-wallet-box">
			<div class="col-sm-6 offset-sm-3 pr-6-half">
				<div class="cld-blue-box cld-trading-package-box" style="min-height: 70px">
					<div class="media text-center">
						<img class="userCreditIcon" src="/bundles/frontend/images/big-wallet-icon-btc.png" alt="">
						<div class="media-body">
							<span style="color: white;">USD Balance
								<strong class="userCreditAmount" style="color: white;">
									{{ number_format($earning, 2)}}
									<span style="color: white;">USD</span></strong></span>
									
								</div>

							</div>

							<div class="text-center">							
								<form name="form" method="post" action="{{ route('withdrawal.create')}}">
									@csrf
									<br />
									<input type="text" id="form_amount" name="amount" required="required" class="form-control reinvestAmountValue" placeholder="Amount in USD" />

									<button type="submit" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn" {{now()->isFriday()?'': 'disabled'}}
										>Withdraw</button>
									{{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

								</form>
							</div>
						</div>


					</div>


				</div>



				<div class="cld-white-box cld-wallet-currency-box m-b19">


					
					<div class="col-sm-12 col-md-12">
						<br /><br />
						<p>Please note that a withdrawal may take some minutes to be processed.</p>
					</div>
					<div class="hidden" style="display: none">
					</div>
				</div>
			</div>

			<div class="clb-transaction-table">
				<h2 class="cld-blue-box clb-transaction-heading">Withdrawal History</h2>
				<div class="clb-transaction-table-section clb-withdraw-table">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<thead>
							<tr>
								<th>Target Currency </th>
								<th>Target Address </th>
								<th>Amount in USD </th>
								{{-- <th>Amount in Currency </th> --}}
								<th>Requested at </th>
								<th>Status </th>
								{{-- <th>Action</th> --}}
							</tr>
						</thead>
						<tbody>
							
								@isset(auth()->user()->withdrawals)
									@foreach(auth()->user()->withdrawals as $wd)
										<tr>
											<td>BTC</td>
											<td>{{ auth()->user()->wallet}}</td>
											<td>{{ number_format($wd->amount, 2)}}</td>
											<td>{{ $wd->created_at}}</td>
											<td>{{ title_case($wd->status)}}</td>
										</tr>
									@endforeach
								@endisset
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="modalVideo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content cld-blue-box cld-active-box">

			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"></button>
				<div class="mt-5"></div>
				<iframe src="https://www.youtube.com/embed/iz3McaNPc2o" class="img-responsive" frameborder="0" width="100%" height="500" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<br />
			</div>
		</div>
	</div>
</div>
@endsection