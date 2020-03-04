@extends('layouts.admin.app')

@section('content')
<link rel="stylesheet" href="{{asset("css/AdminLTE.min.css")}}">
<!-- page content -->
<div class="right_col" role="main">
	<div class="">  
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel" style="min-height: 530px">
					<div class="x_title">
						<h2><i class="fa fa-question-circle"></i> What Will You Like To Do?</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						<div class="col-md-6 col-sm-6 col-xs-12">
							<a href="#" data-toggle="modal" data-target="#add-earning">
								<div class="info-box bg-aqua"> <span class="info-box-icon"><i class="fa fa-fire"></i></span>
									<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Increase User's Earning</b></span> <span class="info-box-number"></span>
										<div class="progress">
											<div class="" style="width: 0%"></div>
										</div>
										<span class="progress-description"><b>Click To Increase</b></span> </div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="#" data-toggle="modal" data-target="#fakeDash">
									<div class="info-box bg-aqua"> <span class="info-box-icon"><i class="fa fa-fire"></i></span>
										<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Create Fake Dashboard</b></span> <span class="info-box-number"></span>
											<div class="progress">
												<div class="" style="width: 0%"></div>
											</div>
											<span class="progress-description"><b>Click To Create</b></span> </div>
										</div>
									</a>
								</div>

						{{--	<div class="col-md-6 col-sm-6 col-xs-12">
								<a href="/manage_hotels">
									<div class="info-box bg-aqua"> <span class="info-box-icon"><i class="fa fa-hotel"></i></span>
										<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Manage Hotels</b></span> <span class="info-box-number"></span>
											<div class="progress">
												<div class="" style="width: 0%"></div>
											</div>
											<span class="progress-description"><b>Click To Manage Hotels</b></span> </div>
										</div>
									</a>
								</div>
								<div style="margin-top: 100px">&nbsp;<br/></div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<a href="/add_deal">
										<div class="info-box bg-green"> <span class="info-box-icon"><i class="fa fa-tags"></i></span>
											<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Add Deals</b></span> <span class="info-box-number"></span>
												<div class="progress">
													<div class="" style="width: 0%"></div>
												</div>
												<span class="progress-description"><b>Click To Add Deals</b></span> </div>
											</div>
										</a>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-12">
										<a href="/manage_deals">
											<div class="info-box bg-yellow"> <span class="info-box-icon"><i class="fa fa-tags"></i></span>
												<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Manage Deals</b></span> <span class="info-box-number"></span>
													<div class="progress">
														<div class="" style="width: 0%"></div>
													</div>
													<span class="progress-description"><b>Click To Manage Deals</b></span> </div>
												</div>
											</a>
										</div>
										<div style="margin-top: 100px">&nbsp;<br/></div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<a href="/users">
												<div class="info-box bg-teal"> <span class="info-box-icon"><i class="fa fa-users"></i></span>
													<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>View Users</b></span> <span class="info-box-number"></span>
														<div class="progress">
															<div class="" style="width: 0%"></div>
														</div>
														<span class="progress-description"><b>Click To View Users</b></span> </div>
													</div>
												</a>
											</div>

											<div class="col-md-6 col-sm-6 col-xs-12">
												<a href="/transactions">
													<div class="info-box bg-maroon"> <span class="info-box-icon"><i class="fa fa-briefcase"></i></span>
														<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>View Transactions</b></span> <span class="info-box-number"></span>
															<div class="progress">
																<div class="" style="width: 0%"></div>
															</div>
															<span class="progress-description"><b>Click To View Transactions</b></span> </div>
														</div>
													</a>
												</div>
												<div style="margin-top: 100px">&nbsp;<br/></div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<a href="/pending_payouts">
														<div class="info-box bg-orange"> <span class="info-box-icon"><i class="fa fa-exclamation-triangle"></i></span>
															<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>View Pending Payout Requests</b></span> <span class="info-box-number"></span>
																<div class="progress">
																	<div class="" style="width: 0%"></div>
																</div>
																<span class="progress-description"><b>Click To View Pending Payout Requests</b></span> </div>
															</div>
														</a>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
													<a href="/change_password">
														<div class="info-box bg-blue"> <span class="info-box-icon"><i class="fa fa-lock"></i></span>
															<div class="info-box-content"> <span class="info-box-text" style="margin-top: 10px"><b>Change Password</b></span> <span class="info-box-number"></span>
																<div class="progress">
																	<div class="" style="width: 0%"></div>
																</div>
																<span class="progress-description"><b>Click To Change Password</b></span> </div>
															</div>
														</a>
													</div>



												</div> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /page content -->
							 <div class="modal fade" id="add-earning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px;">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Increase User's Earning</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="POST" action="{{ route('admin.increase.earning')}}" 
											enctype="multipart/form-data">
											@csrf
											@if (count($investments))
												<div class="form-group">
												<label for="exampleFormControlFile1">User</label>
												<select name="user_id" class="form-control">

													@if(count($investments))
													@foreach ($investments as $inv)
													<option value="{{ $inv->user_id}}">{{ $inv->user->username}}/ 
														Current Earning- ${{ number_format(optional($inv->user->totalEarning)->amount, 2)}}
													</option>
													@endforeach
													@endif
												</select>

											</div>
											<div class="form-group">
												<label for="exampleFormControlFile1">Amount</label>
												<input type="number" class="form-control"  name="amount">
												@if ($errors->has('amount'))
												<span class="text-danger">{{ $errors->first('amount')}}</span>
												@endif
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" id="submit-button" class="btn btn-primary">Save changes</button>
											</div>
											@else
												<div class="form-group">
													<h2>No user with active investment at the moment</h2>
												</div>
											
											@endif
										</form>
									</div>
								</div>
							</div>  
						</div>

						<!-- /page content -->
					 <div class="modal fade" id="fakeDash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Create Fake Dashboard</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="POST" action="{{ route('fd.store')}}">
											@csrf

											<div class="row">
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Username</label>
													<input type="text" name="username" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Plan</label>
													<input type="text" name="plan"  class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Total Investment</label>
													<input type="number" class="form-control"  name="total_investment" >

												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Current Earning</label>
													<input type="number" class="form-control"  name="current_earning" >

												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Total Earning</label>
													<input type="number" class="form-control"  name="total_earning" >

												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">NFP Investment</label>
													<input type="number" class="form-control"  name="nfp_investment" >

												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">NFP Profit</label>
													<input type="number" class="form-control"  name="nfp_profit" >

												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Referral Bonus</label>
													<input type="number" class="form-control"  name="referral_bonus" >

												</div>
												<div class="form-group col-md-6">
													<label for="exampleFormControlFile1">Referrals</label>
													<input type="number" class="form-control"  name="referrals" >

												</div>

											</div>


											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" id="submit-button" class="btn btn-primary">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div> 

						@push('scripts')
						<script type="text/javascript">

							@if ($errors->any())
							$('#add-earning').modal('show');
							@endif

							$('#add-earning').on('show.bs.modal', function(e){

								$(e.currentTarget).find('#submit-button').click(function(e){

									$(this).html('<i class="fa fa-spinner fa-spin"></i>');
								});
							});

						</script>
						@endpush
						@endsection




