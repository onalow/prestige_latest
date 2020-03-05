<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Investment;
use App\Earning;
use Carbon\Carbon;

class DailyPayout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:payout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculates daily profits';

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
        if (! now()->isSaturday() && ! now()->isSunday()) {

            $investments = Investment::where('status', 'expired')
                                 ->where('status','expired')
                                 ->get();

            if ($investments) {
                // $this->info('got it');
                foreach ($investments as $inv) {

                    $this->calculateProfit($inv);
                }
            }
           
            // $this->info('done');
            return;
            
        }
    }

    private function calculateProfit($investment)
    {
        $profit = $investment->roi * $investment->amount;
        $earning = $investment->earning;
        $cum_earning = $investment->cum_earning;
        $investment->cum_earning = $cum_earning + $profit;
        $investment->earning = $profit + $earning;
        $investment->save();

        $total_earning = $investment->user->totalEarning;

        if (! $total_earning) {

            $totalEarning = new Earning;
            $totalEarning->amount = $profit;
            $totalEarning->user_id = $investment->user_id;
            $totalEarning->save();
        }
        else {
            $amount = $total_earning->amount;
            $total_earning->amount = $amount + $profit;
            $total_earning->user_id = $investment->user->id;
            $total_earning->save();
        }

        $expiry = Carbon::parse($investment->expiry)->timestamp;

        if (time() > $expiry) {

            $investment->status = 'expired';
            $investment->save();
            return;
        }

        return;


    }
}
