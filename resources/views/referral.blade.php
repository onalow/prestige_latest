@extends('layouts.site.app')
@section('content')

<div id="main"  style="margin-top:-50px;">
  <section class="section hero sub" style="padding-bottom: 20px">
    <div class="container content-top">
      <div class="row">
        <div class="col-md-12 mx-auto text-center">
          <h1>Referral Marketing</h1>
          <p class="mt-4 mb-4">Prestige Investment Services offers our esteemed investors a lucrative referral reward when they tell others who buy our investment plans.
          </div>
        </div>
      </div>
      {{-- <div class="curved_border"></div> --}}
    </section>
    <section class="section referral pt-0" style="margin-top:20px; z-index: -1;">
      <div class="container">

        <ul class="list-unstyled packages row row-eq-height">
          <li class="col-sm-3">
            <div class="inner">
              <div class="heading">
                <h4>Bronze</h4>
                <h1 class="percentage">8</h1>
              </div>
              <ul class="list-unstyled list">
                <li class="title">1st Level</li>
                <ul class="list-unstyled items">
                  <li class="row">
                    <div class="col-7">Personal Deposit</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$0</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Sales</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$0</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Bonus</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$0</strong></div>
                  </li>
                </ul>
                <li class="sub-title">Commission</li>

              </ul>
            </div>
          </li>
          <li class="col-sm-3">
            <div class="inner">
              <div class="heading">
                <h4>Silver</h4>
                <h1 class="percentage">8</h1>
              </div>
              <ul class="list-unstyled list">
                <li class="title">1st Level</li>
                <ul class="list-unstyled items">
                  <li class="row">
                    <div class="col-7">Personal Deposit</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$50</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Sales</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$1000</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Bonus</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$50</strong></div>
                  </li>
                </ul>
                <li class="sub-title">Commission</li>

              </ul>
            </div>
          </li>
          <li class="col-sm-3">
            <div class="inner">
              <div class="heading">
                <h4>Gold</h4>
                <h1 class="percentage">8</h1>
              </div>
              <ul class="list-unstyled list">
                <li class="title">1st Level</li>
                <ul class="list-unstyled items">
                  <li class="row">
                    <div class="col-7">Personal Deposit</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$50</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Sales</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$5000</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Bonus</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$200</strong></div>
                  </li>
                </ul>
                <li class="sub-title">Commission</li>
                
              </ul>
            </div>
          </li>
          <li class="col-sm-3">
            <div class="inner">
              <div class="heading">
                <h4>Platinum</h4>
                <h1 class="percentage">8</h1>
              </div>
              <ul class="list-unstyled list">
                <li class="title">1st Level</li>
                <ul class="list-unstyled items">
                  <li class="row">
                    <div class="col-7">Personal Deposit</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$250</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Sales</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$30000</strong></div>
                  </li>
                  <li class="row">
                    <div class="col-7">Bonus</div>
                    <div class="col-1 text-center">:</div>
                    <div class="col-4 text-right"><strong>$1000</strong></div>
                  </li>
                </ul>
                <li class="sub-title">Commission</li>
                
              </ul>
            </div>
          </li>
        </ul>

{{--         <div class="row align-items-center">
          <div class="col-sm-3">
            <h2 class="font-weight-bold">Diamond:</h2>
          </div>
          <div class="col-sm-9">
            <p class="mb-0">Monthly share of the 1% total turnover of the corporation, the percentage of profit by Bonus is accrued on every first day of new month.</p>
          </div>
        </div> --}}
      </div>
    </section>
  </div>
  @endsection