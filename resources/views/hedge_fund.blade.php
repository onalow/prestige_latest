@extends('layouts.site.app')
@section('content')

<div id="main watermark-hedge"  style="margin-top:-50px;">   
  <section class="section hero sub watermark-hedge"  style="height: 100%;">     
    <div class="container content-top watermark-hedge" style="padding-left: 0; padding-right: 0;">       
      <div class="row ">         
        <div class="col-md-12 mx-auto text-center">           
          <h1>Hedge Fund Marketplace</h1>
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">An online version of a traditional Capital Introduction program designed to allow Hedge Funds who use P.I.S as their principal Investing platform to market their Funds to P.I.S investors who are Accredited Investors and Qualified Loan holders.</p>           
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">This program is provided free of charge to all Hedge Funds who use Prestige Investment Services, have at least $5 million in assets under management and an audited track record of at least one year or have done its investing at least one year. 
          </p> 
          <p class="mt-4 mb-4" style="padding-left: 10px; padding-right: 10px;">Access the Hedge Fund Marketplace, our online forum where you can meet and do business with traders and investors, institutions and other third-party service providers. Contact a personal manager for more information.
          </p> 
        </div>
        <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">

          <img style="max-width: 100%; height: auto;" class="img-fluid rounded d-block mx-auto" src="{{asset ("css/bundles/frontend/images/hedge.jpeg")}}">
        </div>

      </div>

    </div>

    {{-- <div class="curved_border"></div> --}}
  </section >
{{-- 
<div class="container-fluid text-center watermark-chart" style="padding: 0; margin-top: -25px;">

  <div class="" style="padding-left: 0; padding-right: 0; margin-top: -10px">

    <img class="img-responsive cloud-image " style="width: 70%;" src="{{asset ("css/bundles/frontend/images/loan.jpeg")}}">
  </div>
</div>
--}}
{{-- <div class="container ">
  <p class="mt-4 mb-4 text-center" style
  ="padding-left: 10px; padding-right: 10px;"><strong>Every investor above $150,000 is
    provided with a personal account manager and the investor has a direct
    communication with the Board in order to ensure that our loan offers are
  secured.</strong></p>

  <div class="col-xs-4 mx-auto" style="margin-bottom: 50px;">
    <a href="{{ route('buy')}}"> <button class="btn btn-lg btn-icon btn-danger mx-auto text-uppercase">JOIN THE MOVING TRAIN<i class="fas fa-arrow-circle-right"></i></button></a>
  </div>
</div> --}}
<br>
<br>
<br>
<div class="tradingview-widget-container mx-auto d-block watermark-hedge">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Forex Rates</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
      {
        "width": "100%",
        "height": 320,
        "currencies": [
        "EUR",
        "USD",
        "JPY",
        "GBP",
        "CHF",
        "AUD",
        "CAD",
        "NZD",
        "CNY",
        "TRY",
        "SEK",
        "NOK",
        "DKK",
        "ZAR",
        "HKD",
        "SGD",
        "THB",
        "MXN",
        "IDR",
        "KRW",
        "PLN",
        "ISK",
        "KWD",
        "PHP",
        "MYR",
        "INR",
        "TWD",
        "SAR",
        "RUB",
        "ILS"
        ],
        "locale": "en"
      }
    </script>
  </div>

</div>
@endsection