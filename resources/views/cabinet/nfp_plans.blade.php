@extends('cabinet.layout.app')
@section('content')
<div id="right_content" class="cld-right-content col-lg-9 cld-trading-section">


  <div class="cld-common-white-box m-b19">
    <h2 class="cld-blue-box">NFP Investment Plans<a href="/bundles/homepage/docs/whitepaper.pdf#page=15" target="_blank" data-toggle="tooltip" title="Current Rank" class="information">
      {{-- <img src="{{asset("css/bundles/frontend/images/information-icon.png")}}" alt="Information"> --}}
    </a></h2>
    <div class="cld-box-content cld-trading-pakages">
      <div class="row">




        <div class="col-sm-6 offset-sm-3" style="margin-bottom: 30px;">
          <div class="cld-pakages-box">
            <h2>
              <span class="cld-dis-block">
                <b style="color:#3797d3; font-size:14px;"></b>
              </span>
              {{-- {{ $cat->name}} --}} NFP Investment
            </h2>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width:11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cld-pakages-details" style="font-size: 14px;">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr class="even">
                  <td><span>ROI</span></td>
                  <td>
                    <strong>{{-- {{ $cat->roi}}% Payout - {{$cat->weeks}} week{{$cat->weeks >1 ? 's': ''}} --}} 10% peer two weeks</strong>
                  </td>
                </tr>
                <tr class="odd">
                  <td><span>Minimum Deposit</span></td>
                  <td><strong>${{-- {{ number_format($cat->min_amount, 2)}} --}} 100</strong></td>
                </tr>
                <tr class="even">
                  <td><span>Maximum Deposit</span>
                  </td>
                  <td>
                    <strong>${{-- {{ number_format($cat->max_amount, 2)}} --}} 200</strong>
                  </td>
                </tr>
                <tr class="odd">
                  <td>
                    <span>Indenture Duration</span>
                  </td>
                  <td>
                    <strong>67{{-- {{$cat->duration}} --}} days</strong>
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
              <a href="/{{-- {{ route('invest', encrypt($cat->id))}} --}}" title="" class="cld-blue-box cld-blue-btn">Invest</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
</section>
@endsection