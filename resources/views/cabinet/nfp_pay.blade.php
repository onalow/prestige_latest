@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">
	<div class="row">



		<div class="col-sm-8 offset-sm-2 pl-6-half">
			<div class="cld-white-box" style="min-height: 70px">
				<div class="cld-pakages-box">

					<h2>
						<span class="cld-dis-block">Payment Invoice</span>
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
									<h6>Minimum Deposit dgjhgfjkshdljkahjkehaljkhfjkl</h6>

								</tr>

								<tr class="odd" style="margin-bottom: 35px;">
									<h6>Instruction:</h6>

								</tr>
								<tr class="even" >
									<p>Kindly pay the <strong>exact</strong> amount specified above and click on "I Have Paid to upload transaction id and wait for confirmation"</p>

								</tr>

							</tbody>
						</table>

						<a href="/" title="" class="cld-blue-box cld-blue-btn">I Have Paid</a>
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
