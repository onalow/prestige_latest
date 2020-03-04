@extends('cabinet.layout.app')
@section('content')
@php $user = auth()->user(); @endphp
<div id="right_content" class="cld-right-content cld-bonus-main col-lg-9">
  <div class="cld-inner-content">
    <div class="row mar-half9 cld-rank-box cld-white-style m-b19">
      <div class="col-sm-6 pad-half9">
        <div class="media cld-blue-box">
          <img class="mr-3" src="{{asset("css/bundles/frontend/images/paid-bonus-icon.png")}}" alt="" />
          <div class="media-body">
            <span>Video Bonus <strong>${{ number_format($user->videoBonus()->sum('amount'), 2)}}</strong></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pad-half9">
        <div class="media cld-blue-box">
          <img class="mr-3" src="{{ asset("css/bundles/frontend/images/paid-bonus-icon.png")}}" alt="" />
          <div class="media-body">
            <span>Referral Bonus <strong>${{ number_format($user->refBonus()->sum('amount'), 2)}}</strong></span>
          </div>
        </div>
      </div>

    </div>

    <div class="cld-common-white-box m-b19 row">
                  <div class="cld-box-content col-md-7 col-sm-12" style="padding-top: 30px;">

                      <div class="row mx-auto">
                        <div class="box table-con">
                          @isset ($user->bonuses)
                          <table class="table table-striped table-responsive" id="proofTable">
                            <thead>
                              <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                              </tr>
                            </thead>
                            <tbody id="">
                                
                                @foreach ($user->bonuses as $bonus)
                                <tr>
                                  <td scope="col"><strong>{{$bonus->created_at}}</strong><br/></td>
                                  <td scope="col"><strong>{{$bonus->type}} bonus</strong><br/></td>
                                  <td scope="col"><strong>${{$bonus->amount}}</strong><br/></td>
                                </tr>
                                @endforeach
                              
                              </tbody>
                            </table>
                            @else 
                            <p> No Bonus</p>
                            @endisset
                           {{--  <a class=" col-3 btn btn-danger d-block mx-auto" href="#">Withdraw All</a> --}}
                          </div>
                        </div>

                      </div>
                    
                        <div class="row col-md-5 col-sm-12">
                          @isset($user->netBonus)
                          @if ($user->netBonus->amount > 0 ) {{--&& now()->isFriday() --}}
                          <div class="text-center"> 
                               <div class="media cld-blue-box mt-100">
                                
                                <div class="media-body">
                                  <span class="text-white">Total Bonus <strong>${{ number_format($user->netBonus->amount, 2)}}</strong></span>
                                </div>
                              </div>            
                            <form name="form" method="post" action="{{ route('bonus.withdrawal')}}">
                              @csrf
                              <br />
                              <input type="text" id="form_amount" name="amount" required="required" class="form-control reinvestAmountValue" placeholder="Amount in USD" />

                              <button type="submit" id="form_save" class="btn btn-clx btn-light cld-blue-box cld-blue-btn">Withdraw Bonus</button>
                              {{-- <p><a href="#" class="videoTutorial" style="font-size: 13px;text-align: center;">How to Invest?</a> </p> --}}

                            </form>
                        
                        </div>
                        @endif
                        @endisset
                      </div>
                    </div>



                    <section class="section pt-0 pt-0">
                      <div class="container content-top">
                        <div class="row">

                        </div>
                      </div>
                    </section>


                  </div>

                </div>

              </div>
            </div>
          </div>
        </section>

        @endsection