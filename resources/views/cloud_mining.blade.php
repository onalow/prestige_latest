@extends('layouts.site.app')
@section('content')

<div id="main"  style="margin-top:-50px;">
  <section class="section hero sub" style="padding-bottom: 20px;">
    <div class="container content-top" style="padding-left: 0; padding-right: 0;">
      <div class="row">
        <div class="col-md-12 mx-auto text-center">
          <h1>Cloud Mining</h1>
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">Cloud Mining is the process of mining utilizing a remote datacenter with shared processing power.  When mining,computational power, along with low power costs, is king. Miners around the world compete to solve math problems for a chance to earn digital coins. The more computational power you have, the greater your chances of getting great returns.Our Large-scale combination of Application-Specific Integrated Circuit-ASIC Machines gives us that efficiency.</p>

        </div>
{{-- 
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">

          <img class="img-responsive rounded d-block mx-auto" src="{{asset ("css/bundles/frontend/images/cloud.jpeg")}}">
        </div> --}}

      </div>
   
    </div>

    {{-- <div class="curved_border"></div> --}}
  </section>

    <div class="container-fluid" style="padding: 0; margin-top: -50px;">
      
  {{-- <div class="" style="padding-left: 0; padding-right: 0; margin-top: -10px"> --}}

    <img class="img-responsive  rounded cloud-image" style="width: 100%;" src="{{asset ("css/bundles/frontend/images/cloud.jpeg")}}">
  {{-- </div> --}}
    </div>

  <section class="section referral pt-0" style="margin-top:10px; z-index: -1;">
    <div class="container">

              <ul class="list-unstyled packages row row-eq-height">
          @isset ($categories)
          @foreach ($categories as $cat)
          <li class="col-sm-3" data-animation="flipInY" style="padding:5px 10px;">
            <div class="inner" style="padding:10px 10px;">
              <div class="heading">
                <h4>{{ $cat->name}}</h4>
                <h1 class="percentage">{{ $cat->roi}}</h1>
              </div>
              <ul class="list-unstyled list">
                <li class="title">per  {{$cat->weeks .' '. str_plural('Week', $cat->weeks)}} </li>
                <ul class="list-unstyled items">
                  <li class="row">
                    <div class="col-7">Contract Period</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>{{ $cat->duration}} Days</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Referral Bonus</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>5%</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">24/7 Support</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>Yes</strong></div>
                  </li>
                </ul>
                <li class="sub-title text-center"><h3>${{ number_format($cat->min_amount, 0)}} -  ${{ number_format($cat->max_amount, 0)}}</h3></li>
                <li class="row text-center" style="text-align: center;">
                  <div class="col-xs-4 mx-auto">
                    <a href="{{ route('invest', encrypt($cat->id))}}"> <button class="btn btn-lg btn-icon btn-danger mx-auto text-uppercase">Invest
                      <i class="fas fa-arrow-circle-right"></i></button></a>
                    </div>
                  </li>

                </ul>
              </div>
            </li> 
            @endforeach
            @endisset


          </ul>

      </div>
    </section>
  </div>
  @endsection