@extends('layouts.site.app')
@section('content')
<div id="main">
	<section class="section hero sub">
		<div class="container content-top" style="margin-top:-70px;>
			<div class="row">
				<div class="col-md-6 mx-auto text-center">
					<h1>Payment Proof</h1>
					<p class="mt-4 mb-4">We like to keep everything at sight by making our latest payouts available to our clients! With this service the latest withdraws can be seen on our Payment Proof page.</p>
				</div>
			</div>
		</div>
		<div class="curved_border"></div>
	</section>
	<section class="section pt-0 pt-0">
		<div class="container content-top">
			<div class="row">
				<div class="col-md-10 col-sm-12 mx-auto">
					<div class="box table-con">
						<table class="table table-striped" id="proofTable">
							<thead>
								<tr>
									<th scope="col">Date</th>
									<th scope="col">Username</th>
									<th scope="col">Amount</th>
								</tr>
							</thead>
							<tbody id="">
								<td scope="col"><strong>2018-08-22</strong><br/>
								01:16</td>
								<td scope="col"><strong>bothmann</strong><br/>
									<a href="">XEh1GBvm9tnUTBe7jxd4JEZGvpCXQSsGW8</a></td>
									<td scope="col"><strong>$13704.00</strong><br/>
									3426.00000000 LTC</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	@endsection