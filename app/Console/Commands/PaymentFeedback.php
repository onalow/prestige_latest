<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hexters\CoinPayment\Entities\cointpayment_log_trx as Logs;
use App\Jobs\Feedback;

class PaymentFeedback extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:feedback';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give swift feedback once payment is made';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $trx = Logs::latest()->first();
        // $this->info($trx);
        dispatch( new Feedback($trx));
    }
}
