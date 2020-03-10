@extends('layouts.site.app')
@section('content')

<div id="main"  style="margin-top:-50px;">   
  <section class="section hero sub"  style="height: 100%;">     
    <div class="container content-top" style="padding-left: 0; padding-right: 0;">       
      <div class="row ">         
        <div class="col-md-12 mx-auto text-center">           
          <h1>P.I.S Loan</h1>
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;"> Getting a loan doesn’t have to be intimidating, with the right lender it can be a simple but legitimate process. You only need a lender committed to taking the mystery out of the mortgage loan process! At Prestige Investment
            Services(P.I.S),we understand our investors want simple facts, honest answers
          and competitive products.</p>           
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">P.I.S automatically offers loan services to investors with over $150,000 investment either in our normal investment
            packages or the Non-Farm Payroll(NFP) plans.Investors over $150,000 are entitled to loans of $500,000-$800,000 yearly and Investors over $300,000 are entitled to $900,000-$1.5Million with some percentage paid monthly, or the investor could wish to compound the interest till the time limit,  provided all required information/identity of the investor are duly confirmed by the P.I.S loan board and all Legal authentications are done.
          </p> 
        </div>
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">

          <img style="max-width: 100%; height: auto;" class="img-fluid rounded d-block mx-auto" src="{{asset ("css/bundles/frontend/images/loan.jpeg")}}">
        </div>

      </div>

    </div>

  {{-- <div class="curved_border"></div> --}}
</section>
{{-- 
<div class="container-fluid text-center watermark-chart" style="padding: 0; margin-top: -25px;">

  <div class="" style="padding-left: 0; padding-right: 0; margin-top: -10px">

    <img class="img-responsive cloud-image " style="width: 70%;" src="{{asset ("css/bundles/frontend/images/loan.jpeg")}}">
  </div>
</div>
--}}
<div class="container ">
  <p class="mt-4 mb-4 text-center" style
  ="padding-left: 10px; padding-right: 10px;"><strong>Every investor above $150,000 is
    provided with a personal account manager and the investor has a direct
    communication with the Board in order to ensure that our loan offers are
  secured.</strong></p>

<div class="col-4 mx-auto" style="margin-bottom: 50px;">
  <a href="{{ route('buy')}}" class="btn   btn-danger mx-auto text-uppercase"> JOIN THE MOVING TRAIN<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
@endsection