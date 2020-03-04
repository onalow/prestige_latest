@extends('layouts.site.app')
@section('content')

<div id="main"  style="margin-top:-50px;">
  <section class="section hero sub" style="padding-bottom: 20px;">
    <div class="container content-top" style="padding-left: 0; padding-right: 0;">
      <div class="row">
        <div class="col-md-12 mx-auto text-center">
          <h1>About Us</h1>
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">Prestige Investment Services was founded by a group of like-minded professionals in the area of financial services and business development in 2013. We are a unique combination of many years of experience in the Financial Market and a strong Technical base for non-stop CRYPTOCURRENCY TRADING, BINARY OPTIONS AND FOREX TRADING, PORTFOLIO MANAGEMENT, REAL ESTATE, ART, GOLD  and others. </p>

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

  <section class="section referral pt-0" style="margin-top:-10px;">
    <div class="container">
      <p class="mt-4 mb-4 text-center" style="padding-left: 0; padding-right: 0; font-size: 20px;">Since It’s inception,the Company has attracted Investments through offline and online investment platforms with a proven track record of Excellence. For some years, the Company only managed offline Investments and traded for a few employed members of the sponsor organizations. Few years later, P.I.S came online setting out to spearhead the evolution of online Investment platform all over the world, helping this asset-class to become more accessible to the individual retail investor.</p>

      <p class="mt-4 mb-4 text-center" style="padding-left: 0; padding-right: 0; font-size: 20px;">P.I.S is currently in top partnership with some Institutions/companies: 
        <span style="text-decoration:underline; color:  #042149; font-weight: bold;"> BLOOMBERG BUSINESS,</span><span style="text-decoration:underline; color:  #042149; font-weight: bold;">BITFINEX,</span><span style="text-decoration:underline; color:  #042149; font-weight: bold;">BITTREX,{{-- </span><span style="text-decoration:underline; color:  #042149; font-weight: bold;">BINANCE,</span> --}}<span style="text-decoration:underline; color:  #042149; font-weight: bold;">DE FINANCIELE TELEGRAAFF .</span> </p>
        <p class="mt-4 mb-4" style="padding-left: 0; padding-right: 0; font-size: 20px;">Many years of experience in the Innovation Market allowed us to take a Leading Market Position and to defend this Investment model.</p>

        {{-- <h3 style="font-weight: bold;"> Our Goal</h3> --}}
        <div class="row">
          <div class="col-md-8 col-sm-12 mx-auto text-center">
            <div class="title">
              <h2 >
                <span class="d-block">Our goal</span>
              </h2>
              <hr style="margin-bottom: 0; padding-bottom: 0;">
            </div>
          </div>
        </div>
        <p class="mt-4 mb-4" style=" text-align:justify; padding-left: 0; padding-right: 0; font-size: 20px;">With a user-friendly interface of the platform combined with solid Financial backing,Prestige Investment Services has created the optimal Investment environment for every level of investors.Our goal is to advocate financial and technological proficiency by being one of the leading platforms and solutions providers in the Financial Market.</p>

      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto text-center">
          <div class="title">
            <h2>
              <span class="d-block">Strategic partners</span>
            </h2>
            <hr>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-12 mx-auto text-center">
            <ul class="list-unstyled exchange-list d-flex justify-content-center">
              <li><img src="{{asset("css/bundles/frontend/images/bloomberg.jpg")}}">
              </li>
              <li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/bitfinex.png")}}">
              </li>

              <li><img src="{{asset("css/bundles/frontend/images/fd.png")}}">
              </li>

              <li><img src="{{asset("css/bundles/frontend/images/binsider.png")}}">
              </li>
            </ul>
            <ul class="list-unstyled exchange-list d-flex justify-content-center">
            {{--   <li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/binance.png")}}">
              </li> --}}
              <li><img src="{{asset("css/bundles/frontend/images/dft.png")}}">
              </li>
              <li><img src="{{asset("css/bundles/homepage/landing/assets/img/exchanges/bittrex.png")}}">
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection