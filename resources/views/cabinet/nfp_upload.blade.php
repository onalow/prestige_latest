@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">
	<div class="row">



		<div class="col-sm-6  pl-6-half">
			<div class="cld-white-box" style="min-height: 70px">
				<div class="cld-pakages-box">

					<h2>
						<span class="cld-dis-block">Upload TxID</span>
						<text class="dailyPayment">{{-- {{$category->name}} --}} $50,000.00</text>
					</h2>
					<div class="cld-pakages-details">

						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tbody>
								<tr class="even" style="margin-bottom: 35px;">
									<h5>BTC Equivalent <strong>0.067534</strong></h5>
									
								</tr>
								<tr class="odd" style="margin-bottom: 35px;">
									<h6>BTC Wallet Address:</h6>

								</tr>	
								<tr class="even" style="margin-bottom: 35px;">
									<h6>33Bjdgjhgfjkshdljkahjkehaljkhfjkl</h6>

								</tr>

								<tr class="odd" style="margin-bottom: 35px;">
									<h6>PAID</h6>

								</tr>

							</tbody>
						</table>

						<form name="form" method="post" action="{{route('invest.process')}}">
							@csrf
							<br />
							<div class="form-group">
								<input type="text" id="form_amount" name="amount" required="required" value="{{ old('amount')}}" 
								class="form-control reinvestAmountValue" placeholder="Transaction ID" />
								@if($errors->has('amount'))
								<span class="help-block text-red">{{ $errors->first('amount')}}</span>
								@endif
							</div>
							{{-- <input type="hidden" name="category" value="{{ $category->id}}"> --}}
							<button type="submit" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Upload</button>
							{{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

						</form>


						<a href="/" title="" class="cld-blue-box cld-blue-btn">Delete Transaction</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 pl-6-half">
			<div class="cld-white-box" style="min-height: 70px">
				<div class="cld-pakages-box">

					<h2>
						<span class="cld-dis-block">Upload TxID</span>
						<text class="dailyPayment">{{-- {{$category->name}} --}} $1,000.00</text>
					</h2>
					<div class="cld-pakages-details">

						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tbody>
								<tr class="even" style="margin-bottom: 35px;">
									<h5>BTC Equivalent <strong>0.0534</strong></h5>
									
								</tr>
								<tr class="odd" style="margin-bottom: 35px;">
									<h6>BTC Wallet Address:</h6>

								</tr>	
								<tr class="even" style="margin-bottom: 35px;">
									<h6>33Bjdgjhgfjkshdljkahjkehaljkhfjkl</h6>

								</tr>

								<tr class="odd" style="margin-bottom: 35px;">
									<h6>PAID</h6>

								</tr>

							</tbody>
						</table>

						<form name="form" method="post" action="{{route('invest.process')}}">
							@csrf
							<br />
							<div class="form-group">
								<input type="text" id="form_amount" name="amount" required="required" value="{{ old('amount')}}" 
								class="form-control reinvestAmountValue" placeholder="Transaction ID" />
								@if($errors->has('amount'))
								<span class="help-block text-red">{{ $errors->first('amount')}}</span>
								@endif
							</div>
							{{-- <input type="hidden" name="category" value="{{ $category->id}}"> --}}
							<button type="submit" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Upload</button>
							{{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

						</form>


						<a href="/" title="" class="cld-blue-box cld-blue-btn">Delete Transaction</a>
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
