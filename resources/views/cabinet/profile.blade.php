@extends('cabinet.layout.app')
@section('content')
@php $user = auth()->user(); @endphp
<div id="right_content" class="cld-right-content col-lg-9">
	<div class="cld-inner-content">
{{-- 		<div class="cld-common-white-box cld-activation-box mb-3">
			<h2 class="cld-blue-box">
			Activate Google Authenticator </h2>
			<div class="cld-box-content">

			</div>
		</div> --}}
		<div class="row cld-sub-box cld-rank-box cld-white-style m-b19">


									<div class="col-sm-6 offset-sm-3 cld-setting-cm cld-setting-newsletter">
{{-- 										<div class="cld-blue-box be-min-height-210">
											<div class="media">
												<img class="mr-3" src="/bundles/frontend/images/newsletter-icon.png" alt="">
												<div class="media-body">
													<span><strong>Newsletter</strong></span>
												</div>
											</div>
											<div class="cld-news-form">
												<form action="/cabinet/settings/newsletter/change" method="post" class="projectAjaxForm projectAjaxFormOnChangeSubmit">
													<div class="btn-group cld-switch-style mx-auto" data-toggle="buttons">
														<label class="btn btn-default btn-on btn-xs active">
															<input type="radio" value="1" name="newsletterSubscription" checked="checked">ON</label>
															<label class="btn btn-default btn-off btn-xs ">
																<input type="radio" value="0" name="newsletterSubscription">OFF</label>
															</div>
														</form>
													</div>
												</div> --}}
											</div>
										</div>

										<div class="row cld-change-forms">
											<div class="col-sm-6 cld-form cld-send-form pr-6-half">
												<div class="cld-form-inner mb-3">
													<h2>Change Password</h2>
													<form name="form" method="post"action="{{ route('change.password')}}">
														@csrf
														<div class="form-group row">
															<label class="col-sm-6 col-form-label required" for="form_oldPassword">Password</label>
															<div class="col-sm-6">
																<input type="password" id="form_oldPassword" name="old_password" required="required" class="form-control">
																@if ($errors->has('old_password'))
																<span class="text-danger">{{ $errors->first('old_password')}}
																</span>
																@endif
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-6 col-form-label required" for="form_newPassword">New Password</label>
															<div class="col-sm-6">
																<input type="password" id="form_newPassword" name="new_password" required="required" class="form-control">
																@if ($errors->has('new_password'))
																<span class="text-danger">{{ $errors->first('new_password')}}
																</span>
																@endif
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-6 col-form-label required" for="form_newPasswordRepeat">Repeat the new password</label>
															<div class="col-sm-6">
																<input type="password" id="form_newPasswordRepeat" name="new_password_confirmation" required="required" class="form-control">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-6 col-form-label">&nbsp;</label>
															<div class="col-sm-6">
																<button type="submit" id="form_save" e]" class="btn cld-btn-gradient">Save</button>
															</div>
														</div>
														
													</form>
												</div>
												<div class="cld-form-inner cld-change-phone">
													<h2>Change Phone number</h2>
													<form name="form" method="post" action="{{ route('update.phone')}}">
														@csrf
														<div class="form-group row">
															<label class="col-sm-6 col-form-label required" for="form_phoneNumber">Phone number</label>
															<div class="col-sm-6">
																<input type="text" id="form_phoneNumber" name="phone" required="required" class="form-control" placeholder="+23430304040"
																value="{{$user->phone}}">
																@if ($errors->has('phone'))
																<span class="text-danger">{{ $errors->first('phone')}}
																</span>
																@endif
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-6 col-form-label">&nbsp;</label>
															<div class="col-sm-6">
																<button type="submit" id="form_save" class="btn cld-btn-gradient">Save</button>
															</div>
														</div>
														<input type="hidden" id="form__token" name="form[_token]" value="RQsY0g1odeIZGtUXHjyqjzppLFagR2PTxYYiB5RCgqg">
													</form>
												</div>
											</div>
											<div class="col-sm-6 cld-form cld-send-form pl-6-half">
												<div class="cld-form-inner mb-3">
													<h2>Add/Change Payout Address</h2>
													<form name="form" method="post" action="{{ route('update.wallet')}}">
														@csrf

														<h6 class="text-center">{{$user->wallet}}</h6>
														<div class="form-group row">
															<label class="col-sm-12 col-md-3 col-form-label" for="form_BTC">Bitcoin</label>
															<div class="col-sm-12 col-md-9">
																<input type="text" id="form_BTC" name="wallet" class="form-control" v placeholder="BTC Wallet Address">

																@if ($errors->has('wallet'))
																<span class="text-danger">{{ $errors->first('wallet')}}
																</span>
																@endif
															</div>
														</div>
							
							

														<div><button type="submit"  class="btn cld-btn-gradient">Save</button></div>
													</form>
													<div class="form-group row">
														<label class="col-sm-6 col-form-label">&nbsp;</label>
														<div class="col-sm-6">
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