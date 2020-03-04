<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Investment;
use GuzzleHttp\Client;
use App\Events\PaymentSuccessful;

class Feedback implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->data['status'] === 0) {
        
             // event(new PaymentSuccessful($this->data->payment_address));
            $this->notifyPayment($this->data);
          
             
        }
        
    }

    private function notifyPayment($data)
    {
        $client = new Client();
         $url = 'https://chain.api.btc.com/v3/address/'.$data['payment_address'];

        try{
           
            $trxn = Investment::where('payment_id', $data->payment_address)->first();

            // dd($trxn);
            if ( ! $trxn->notified) {
                $client = new Client();

                $response = $client->get($url);

                $result = json_decode($response->getBody()->getContents());
                
                if (! is_null($result->data)) {
                    $trxn->notified = 1;
                    $trxn->save();
                   
                    event(new PaymentSuccessful($data->payment_address));
                    $this->emailNotify($trxn);
               
                }
            }

        }catch(\Exception $e) {

            throw $e;
        }

            
    }

    private function emailNotify($data)
    {
        $params['data'] = $data;
        $params['to'] = $data->user;
        $params['template_type'] = 'markdown';
        $params['template'] = 'emails.payment-received';
        $params['subject'] = 'Payment Received';
        sendmail($params);
    }
}
