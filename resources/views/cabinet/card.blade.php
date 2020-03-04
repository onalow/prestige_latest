@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">

		<div class="row">
			<div class="col-xs-12 col-md-6 offset-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row text-center">		
							<h3 style="text-align: center;">Card Payment</h3>
							
						</div>
						<img class="img-responsive cc-img" src="{{asset ("css/bundles/frontend/images/card.png")}}">
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="{{route('pay.with.card', $investment_id)}}">
							@csrf
								<div class="col-xs-12">
									<div class="form-group">
										<label>CARD NUMBER</label>
										<div class="input-group">
											<input type="number" class="form-control" placeholder="Valid Card Number" name="card_number" />
											<span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
										</div>
									</div>
								
							</div>
							<div class="row">
								<div class="col-xs-7 col-md-7">
									<div class="form-group">
										<label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
										<input type="tel" class="form-control" name="expiry" placeholder="MM / YY" />
									</div>
								</div>
								<div class="col-xs-5 col-md-5 pull-right">
									<div class="form-group">
										<label>CV CODE</label>
										<input type="number" name="cvv" class="form-control" placeholder="CVC" />
									</div>
								</div>
							</div>
								<input type="hidden" name="link_transaction" value="{{$link_transaction}}">
								<div class="col-xs-12">
									<div class="form-group">
										<label>NAME ON CARD</label>
										<input type="text" name="card_name" class="form-control" placeholder="Card Owner Names" />
									</div>
								</div>

								<div class="col-xs-12 col-md-8">
									<button type="submit" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Process payment</button>
								</div>	
						
						</form>
					</div>
					
				</div>
			</div>
		</div>



{{-- <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 offset-md-4">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <h3 class="text-xs-center">Payment Details</h3>
                        <img class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="card-block">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 float-xs-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div> --}}

</div>

</section>

@endsection
