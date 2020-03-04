@extends('cabinet.layout.appdeposit')
@section('content')
<div id="coinpayment-vue" class="cld-right-content col-lg-9">
  <div id="right_content" class="cld-right-content col-lg-9">
    <div class="cld-inner-content">

      <div class="row">     
       <div class="cld-white-box cld-wallet-currency-box m-b19">
        <div class="row ">
          <div class="col-sm-12 text-center">       
            <h3 style="font-weight: 300;">Payment Summary </h3>
            <p>Pay with any coin below</p>
          </div>

          <div class="row coin-items">
           <div class="col-6 show-coin mt-3" v-for="(coin, index) in filterCoin()" :key="coin.name" @click="selectMethod(coin)">
            <div class="card" v-bind:class="{ 'selected' : coin.selected }">
              <div class="media " style="margin: 2px 2px 3px 2px;">
                <img style="margin-right: 3px" width="40" v-bind:src="coin.icon">
                <div class="media-body">
                  <strong  style="margin-top: 0px"> @{{ coin.name }}</strong><br>
                  <small class="text-muted">@{{ coin.rate }}</small>

                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-12 text-center" style="margin-bottom: 50px;">
            {{-- <h6 style="font-weight: 200;">Summary </h6> --}}
            <p style=" font-size: 20px; font-weight: 100;">Amount: <span> {{ number_format($data['amountTotal'] , 2) }} {{ config('coinpayment.default_currency') }}</span></p>
            <p style=" font-size: 15px; font-weight: 400;">@{{ paymentMethod }} Equivalent: <span>
              @{{ total_amount_coin }}
            </span></p>
            <button type="button" id="pay-button" class="btn btn-clx btn-light cld-blue-box cld-blue-btn" type="button" v-bind:disabled="!(coins.length > 0)" class="btn btn-block btn-danger mt-3 mb-4" @click="confirmation">
             Loading Payment methods <i class="fa fa-spinner fa-spin"></i>
           </button>
         </div>

       </div>
     </div>

   </div> 
 </div>
</div>

<div class="clb-transaction-table">
  <h2 class="cld-blue-box clb-transaction-heading">Deposit History</h2>
  <div class="clb-transaction-table-section">
    <table class="table-responsive" cellpadding="0" cellspacing="0" border="0" width="100%">
      <tr>
        <th class="p-l35">
        Date </th>
        <th>Currency</th>
        <th>Amount in currency</th>
        <th>Status</th>
        <th>Link / Address</th>
      </tr>
      <template v-for="(trx, key) in trxns">
        <tr class=" odd" :key="trx.id">
          <td class="p-l35">@{{ trx.payment_created_at}}</td>
          <td>
            @{{ trx.coin}}
          </td>

          <td>@{{trx.amount}} @{{trx.coin}} </td>
          <td>
            @{{ trx.status_text}}
          </td>
          <td>
            @{{ trx.payment_address}}
          </td>
        </tr>
      </template>
     {{--  <tr class=" even ">
        <td class="p-l35">2018-08-21 09:46</td>
        <td>Bitcoin
          (BTC)
        </td>
        <td>
        $3885,95</td>
        <td>0,6000000000 BTC</td>
        <td>
        Waiting </td>
        <td>
          1JaH1a9WebGQvoj4EQPuzv8CDQFp6XYwZh
        </td>
      </tr> --}}
    </table>
  </div>
</div>
</div>

<div class="modal fade" id="paynow" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content text-center">

      <div class="modal-header mx-auto d-block">
        <h4 class="modal-title" id="exampleModalLabel" style="text-align: center">Payment Invoice</h4>
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
      </div>


      <!-- Modal body -->
      <div class="modal-body" >
        <div class="row mx-auto d-block">
         <p><span style="font-weight: bold;">Notice</span> <br> Payment would be received within 5 minutes of completion.</p>
       </div>

       <qrcode class="mx-auto d-block"  v-bind:value="payment.first.address" :options="{ size: 200 }"></qrcode>

       <p class="text-center" style="margin: 20px 0;">@{{ payment.first.address }}</p>

       <div class="table-responsive col-sm-12">
        <table class="table">
          <tr style="font-weight: bold;">
            <td class="text-right">Total Amount To Send:</td>
            <td>@{{ payment.first.amount }} @{{ payment.last.coin }}</td>
          </tr>
          <tr>
            <td class="text-right">Total confirms needed:</td>
            <td>@{{ payment.first.confirms_needed }}</td>
          </tr>
          <tr>
            <td class="text-right">Status:</td>
            <td>Waiting for Payment</td>
          </tr>
          <tr style="font-weight: bold;">
            <td class="text-right" >Time Left For Us to Confirm Funds:</td>
            <td>
             <div class="time-remaining bold">.../.../... ...:...:...</div>
           </td>
         </tr>
         <tr>
          <td class="text-center" colspan="2">

            <div class="text-danger">
              <small style="color: red;">Do not send value to us if address status is expired!</small> <br>
              <small style="color: red;">Kindly note that any payment less than @{{ payment.first.amount }} @{{ payment.last.coin }} will not be processed.</small>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-right">Received So Far:</td>
          <td>@{{ payment.last.receivedf }} @{{ payment.last.coin }}</td>
        </tr>
        <tr>
          <td class="text-right">Balance Remaining:</td>
          <td>
            @{{ payment.first.amount }} @{{ payment.last.coin }}
          </td>
        </tr>

        <tr>
          <td class="text-right">Payment ID:</td>
          {{-- <td>CPRDJJEDTFYTFTDRDCFCRDXCTFCD</td> --}}
          <td>@{{ payment.first.txn_id }}</td>
        </tr>

      </table>

    </div>


  </div>
</div>
</div>




</div>

</div>

@endsection

@section('jq')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 {{-- <script src="{{asset("css/bundles/frontend/js/bootstrap.min.js")}}"></script> --}}
@endsection
@push('scripts')
<script src="https://cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@xkeshi/vue-qrcode@0.3.0/dist/vue-qrcode.min.js"></script>
<script type="text/javascript">

  Vue.component('qrcode', VueQrcode);
  var vue = new Vue({
    el: '#coinpayment-vue',
    data: {
      paymentMethod: '-',
      total_amount_coin: 0,
      searchCoin: '',
      amountTotalUsd: {{ $data['amountTotal'] }},
      coins: [],
      errors: [],
      isError: false,
      coinAliases:[],
      payment: {
        first: {},
        last: {}
      },
      trxns : [],
    },
    created(){
      this.getTransactions();
      this.getMethods();

      // console.log(Echo);



      //$('#paynow').modal('show');
    },
    methods:{
      getMethods(){
        var self = this;
        
        axios.get('{{ route('coinpayment.ajax.rate.usd', $data['amountTotal']) }}')
        .then(function(json){
          self.paymentMethod = json.data.coins[0].iso;
          self.total_amount_coin = json.data.coins[0].rate;
          self.coins = json.data.coins_accept;
          self.coinAliases = json.data.aliases;

          $('.coin-items').slimScroll({
            height: '500px'
          });
          $('#pay-button').html('Pay Now');

        });
      },
      selectMethod(item){

        this.coins.forEach(function(coin){
          coin.selected = false;
        });

        item.selected = true;
        this.paymentMethod = item.iso;
        this.total_amount_coin = item.rate;
        this.searchCoin = '';
      },
      filterCoin: function() {
        var self = this;
        return this.coins.filter(function(coin) {
          let regex = new RegExp('(' + self.searchCoin + ')', 'i');
          return coin.name.match(regex);
        })
      },
      confirmation(){
        var self = this;
        swal('Confirmation', 'Are you sure ?',{
          buttons: true
        }).then(function(event){
          if(event){
            self.makeTransaction();
          }
        });
      },
      getTransactions(){
        var self = this;
        axios.get('{{ route('aja.get.trxns')}}')
        .then(function(data){
            // console.log(data.data);
            if (data) {
              self.trxns = data.data;

            }
          });
      },
      listenForNewTransaction(channel){
          // console.log(channel);
          Echo.channel('investment-'+ channel)
          .listen('PaymentSuccessful', (e) =>{


            if (! ('Notification' in window)) {
              alert('Web Notification is not supported');
              return;
            }
            Notification.requestPermission( permission => {
              let notification = new Notification('Great!', {
                    body: 'Payment successful, Waiting for confirmation from Blockchain network', // content for the alert
                    icon: "{{ asset('images/logo.jpeg')}}" // optional image url
                  });
              //     notification.onclick = (e) => {
              //     window.open(window.location.href);
              // };
            });

          });
          // console.log(Echo);
        },
        makeTransaction(){
          var self = this;
          swal('Please Wait','Creating Transactoin...', {
            closeOnClickOutside: false,
            closeOnEsc: false,
            buttons:false,
            timer: 10000
          });

          var params = {
            amount: this.amountTotalUsd,
            payment_method: this.paymentMethod
          };

          axios.post(`{{ route('coinpayment.ajax.store.transaction') }}`, params)
          .then(function(json){
            self.payment.first = json.data.result;
            var _self = self;

          //////////////////listen for Pusher here 
          self.listenForNewTransaction(json.data.result.address);
          //////////////////

          if(json.data.error == 'ok'){
            var result = json.data.result;
            var parameters = {
              result,
              params: {!! $params !!},
              payload: {!! $payload !!}
            };
            axios.post(`{{ route('coinpayment.ajax.trxinfo') }}`, parameters)
            .then(function(json){
              _self.payment.last = json.data.result;
              var date = new Date(json.data.result.time_expires * 1000);
              var time_exp = `${date.getFullYear()}/${date.getMonth()+1}/${date.getDate()} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
              $('.time-remaining').countdown(time_exp, function(event){
                $(this).html(event.strftime('%D days %H:%M:%S'));
              });
              swal.close();
              $('#paynow').modal('show');
              self.getTransactions();
              // console.log(json.data.result);

            })
            .catch(function(error){
              console.log(error);
              swal('Danger!', 'Look like something wrong!');
            });

          }else{
            swal('Danger!', 'Look like something wrong!');
          }
        })
          .catch(function(err){
            if(err !== undefined)
              if(err.response !== undefined)
                if(err.response.status == 422){
                  swal('Danger!', err.response.data.message,{
                    dangerMode: true,
                    icon: "error",
                  });
                  self.errors = err.response.data.errors;
                  self.isError = true;
                }
              });

        }
      }
    });
  </script>
  @endpush