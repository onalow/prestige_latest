@extends('cabinet.layout.app')
@section('content')
<div id="right_content" class="cld-right-content col-lg-9 cld-trading-section">
  <div class="row cld-rank-box cld-white-style m-b19 mar-half9">
    <div class="col-sm-6 pad-half9" id="pad-half9">
      <div class="media cld-blue-box">
        {{-- <img class="mr-3" src="{{asset("css/bundles/frontend/images/trophy-icon.png")}}" alt=""> --}}
        <div class="media-body">
          <span>Plan <strong>{{ auth()->user()->plan() ? auth()->user()->plan()->category->name : 'None'}}</strong></span>
          <a href="/bundles/homepage/docs/whitepaper.pdf#page=17" target="_blank" data-toggle="tooltip" title="Current Rank" class="information">
            {{-- <img src="{{asset("css/bundles/frontend/images/information-icon.png")}}" alt="Information"> --}}
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 pad-half9">
      <div class="media cld-blue-box cld-active-box">
        <span class="mr-3 ml-4 mt-2">My Plan(s)</span>
        <div class="media-body text-right">
          <span><strong>{{ auth()->user()->multiPlans()}}</strong></span>
        </div>
      </div>
    </div>
   {{--  <div class="col-sm-4 pad-half9">
      <div class="media cld-blue-box cld-buy-button">
        <div class="media-body">
          <a href="/cabinet/package/buy/invest" class="btn btn-clx btn-light short-cut-button-center" title="Buy Investment Plan"><i class="cl-icon cl-icon-switch-small"></i>REINVEST</a>
        </div>
      </div>
    </div> --}}
  </div>

  <div class="cld-common-white-box m-b19">
    <h2 class="cld-blue-box">Investment Plans<a href="/bundles/homepage/docs/whitepaper.pdf#page=15" target="_blank" data-toggle="tooltip" title="Current Rank" class="information">
      {{-- <img src="{{asset("css/bundles/frontend/images/information-icon.png")}}" alt="Information"> --}}
    </a></h2>
    <div class="cld-box-content cld-trading-pakages">
      <div class="row">



        @isset ($categories)
        @foreach ($categories as $cat)
        <div class="col-sm-6" style="margin-bottom: 30px;">
          <div class="cld-pakages-box">
            <h2>
              <span class="cld-dis-block">
                <b style="color:#3797d3; font-size:14px;"></b>
              </span>
              {{ $cat->name}}
            </h2>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width:11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cld-pakages-details" style="font-size: 14px;">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="even">
                  <td><span>ROI</span></td>
                  <td>
                    <strong>{{ $cat->roi}}% Payout - {{$cat->weeks}} week{{$cat->weeks >1 ? 's': ''}}</strong>
                  </td>
                </tr>
                <tr class="odd">
                  <td><span>Minimum Deposit</span></td>
                  <td><strong>${{ number_format($cat->min_amount, 0)}}</strong></td>
                </tr>
                <tr class="even">
                  <td><span>Maximum Deposit</span>
                  </td>
                  <td>
                    <strong>${{ number_format($cat->max_amount, 0)}}</strong>
                  </td>
                </tr>
                <tr class="odd">
                  <td>
                    <span>Indenture Duration</span>
                  </td>
                  <td>
                    @if ($category->type == "nfp")
                  <strong>3 Days</strong>
                  @else
                 <strong>{{$cat->duration}} days</strong>
                  @endif
                    
                  </td>
                </tr>
                <tr class="odd">
                  <td>
                    <span>24/7 Support</span>
                  </td>
                  <td>
                    <strong>Yes</strong>
                  </td>
                </tr>

              </table>
              <a href="{{ route('invest', encrypt($cat->id))}}" title="" class="cld-blue-box cld-blue-btn">Invest</a>
            </div>
          </div>
        </div>
        @endforeach
        @endisset

        



      </div>
    </div>
  </div>

  <!-- TradingView Widget BEGIN -->
  <div class="row">
    <div class="col-sm-11 mx-auto">  
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
</div>

</div>
</div>
</div>
</section>
@endsection