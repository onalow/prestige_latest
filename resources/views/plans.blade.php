@extends('layouts.site.app')
@section('content')

<div id="main"  style="margin-top:-50px;">
  <section class="section hero sub" style="padding-bottom: 20px">
    <div class="container content-top">
      <div class="row">
        <div class="col-md-10 mx-auto text-center">
          <h1>Availabe Packages</h1>
          <p class="mt-4 mb-4">At Prestige Investment Services,we develop the most progressive and strategic solutions for an efficient and profitable cryptocurrency experience. We provide the technical know-how and professional support for our clients with a discernible interest in the science of cryptocurrency and blockchain technology to ultimately lead them to success in the industry.</p>
          <p class="mt-4 mb-4">Prestige Investment Services offers investment plans that will suit your investment budget.</p>
        </div>
      </div>
    </div>
    {{-- <div class="curved_border"></div> --}}
  </section>
  <section class="section referral pt-0" style="margin-top:20px;">
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
                  <div class="col-4 text-right"><strong>5% - 25%
                   {{--  {{
                      @if ($loop->index == 0)
                      5%
                      @endif
                      @if ($loop->index == 1)
                      7%
                      @endif
                      @if ($loop->index == 2)
                      10%
                      @endif 
                      @if ($loop->index == 3)
                      15%
                      @endif 
                      @if ($loop->index == 4)
                      20%
                      @endif
                      @endif 
                      @if ($loop->index == 5)
                      25%
                      @endif
                      @endif @if ($loop->index == 6)
                      25%
                      @endif
                    }} --}}
                  </strong></div>
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
      <!-- TradingView Widget BEGIN -->
      <div class="row">
        <div class="col-sm-12 mx-auto">  
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
                "width": "100%",
                "height": 600,
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "locale": "en"
              }
            </script>
          </div>
        </div>
      </div>
      <!-- TradingView Widget END -->

    </section>
  </div>
  @endsection