<div class="modal fade" id="paynow" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content text-center">

        <div class="modal-header text-center text-xs-center">
          <h4 class="modal-title text-xs-center" id="exampleModalLabel" style="text-align: center">Payment Invoice</h4>
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
        </div>


        <!-- Modal body -->
        <div class="modal-body" >
          <div class="row text-center text-xs-center">
           <p class="text-xs-center"><span style="font-weight: bold;">Notice</span> <br> Payment should be received within 5 minutes of completion.</p>
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

        </div>

      </div>
    </div>
  </div>
</div>