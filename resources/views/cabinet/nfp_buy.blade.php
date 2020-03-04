@extends('cabinet.layout.app')
@section('content')

<div id="right_content" class="cld-right-content col-lg-9 cld-trading-package">
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
                <strong>{{ $cat->roi}}% </strong>
                {{-- <strong>{{ $cat->roi}}% Payout - {{$cat->weeks}} week{{$cat->weeks >1 ? 's': ''}}</strong> --}}
              </td>
            </tr>
            <tr class="odd">
              <td><span>Minimum Deposit</span></td>
              <td><strong>${{ number_format($cat->min_amount, 2)}}</strong></td>
            </tr>
            <tr class="even">
              <td><span>Maximum Deposit</span>
              </td>
              <td>
                <strong>${{ number_format($cat->max_amount, 2)}}</strong>
              </td>
            </tr>
            <tr class="odd">
              <td>
                <span>Trade Duration</span>
              </td>
              <td>
                <strong>3 days</strong>
              </td>
            </tr>
            <tr class="odd">
              <td>
                <span>Indenture Duration</span>
              </td>
              <td>
                {{-- <strong>1 Month</strong> --}}
                <strong>{{$cat->duration}} Weeks (1 Month)</strong>
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

{{-- 			<div class="col-sm-6 pr-6-half">
				<div class="cld-blue-box cld-trading-package-box" style="min-height: 70px">
					<div class="media">

						<img class="userCreditIcon" src="/bundles/frontend/images/big-wallet-icon-btc.png" alt="">
						<div class="media-body">
							<span>USD Balance
								<strong class="userCreditAmount">563,670
									<span>USD</span></strong></span>
								</div>
								<a href="/cabinet/deposit" class="btn btn-clx btn-light" title="Make Deposit"><i class="cl-icon cl-icon-switch-small"></i> Deposit </a>
							</div>
						</div>
					</div> --}}
				</div>


      </div>
    </div>
  </div>
</section>

@endsection
