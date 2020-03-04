<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Investment;
use App\Bonus;
use App\NetBonus;
use Hexters\CoinPayment\Entities\cointpayment_log_trx;
use App\Jobs\Feedback;

class coinPaymentCallbackProccedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {

        // Do something...

        /* === Output data $request from task schedule === */
        // $this->data['request_type'] = 'schedule_transaction';
        // $this->data['payload']; // <--- Your payload data
        // $this->data['time_created'];
        // $this->data['time_expires'];
        // $this->data['status'];
        /*  -- Status transaction --
            0   : Waiting for buyer funds
            1   : Funds received and confirmed, sending to you shortly
            100 : Complete,
            -1  : Cancelled / Timed Out
        */
        // $this->data['status_text'];
        // $this->data['type'];
        // $this->data['coin'];
        // $this->data['amount'];
        // $this->data['amountf'];
        // $this->data['received'];
        // $this->data['receivedf'];
        // $this->data['recv_confirms'];
        // $this->data['payment_address'];
        // $this->data['time_completed']; // showing if "$this->data['status" is 100
        if ($this->data['request_type'] == 'schedule_transaction') {
            try {
                if ($this->data['status'] === 100) {

                    $investment = Investment::where(['payment_id' => $this->data['payment_address'], 'status' => 'pending'])->first();
                    if ($investment) {

                        $investment->status = 'active';
                        $investment->save();

                        $user = $investment->user;
                        $user_investments = $user->investments->where('status', 'active')->count();
                        if ($user_investments == 1) {

                            $this->createBonus($investment, $user);
                        }
                    }

                    //call
                }
            } catch (\Exception $e) {

                report($e);
            }
        }
    /* === End data $request from task schedule === */

    /* === Output data $request from Create Transaction === */
        // $this->data['request_type'] = 'create_transaction';
        // $this->data['params']; // <--- Your custom params
        // $this->data['payload']; // <--- Your payload data
        // $this->data['transaction']['time_created'];
        // $this->data['transaction']['time_expires'];
        // $this->data['transaction']['status'];
        // $this->data['transaction']['status_text'];
        // $this->data['transaction']['type'];
        // $this->data['transaction']['coin'];
        // $this->data['transaction']['amount'];
        // $this->data['transaction']['amountf'];
        // $this->data['transaction']['received'];
        // $this->data['transaction']['receivedf'];
        // $this->data['transaction']['recv_confirms'];
        // $this->data['transaction']['payment_address'];
    /* === End data $request from Create Transaction === */

        if ($this->data['request_type'] === 'create_transaction') {
            try {
                $user = $this->data['transaction']['user'];
                $trxn = $user->latestInvestment();
                $trxn->payment_id = $this->data['transaction']['payment_address'];
                $trxn->save();
                // $trx = cointpayment_log_trx::latest()->first();
                // $this->info($trx);
                // dispatch( new Feedback($trx));
            } catch (\Exception $e) {
                report($e);
            }
        }

    }

    private function createBonus($investment, $user)
    {
        if ($user->hasSponsor()) {

            $sponsor = $user->sponsor();
            $bonus = $investment->amount * ($investment->category->bonus/100);

            $this->createNetBonus($bonus, $user);
            $newBonus = new Bonus();

            $newBonus->recipient_id = $sponsor->id;
            $newBonus->referralID = $user->referralID;
            $newBonus->amount = $bonus;
            $newBonus->type = 'referral';
            $newBonus->investment_id = $investment->id;
            $newBonus->save();

            return; 
        }
        return;
    }

    private function createNetBonus($bonus, $user)
    {    
        $netBonus = $user->netBonus;

        if ($netBonus) {

            $net_amount = $netBonus->amount;
            $netBonus->amount = $net_amount + $bonus;
            $netBonus->save();
            return;
        }
        else {

            $new = new NetBonus();
            $new->user_id = $user->id;
            $new->amount = $bonus;
            $new->save();
            return;
        }
    }
}
