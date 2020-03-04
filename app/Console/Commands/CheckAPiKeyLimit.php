<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Checker;
use Hexters\CoinPayment\Entities\cointpayment_log_trx as Logs;

class CheckAPiKeyLimit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api_key:check_limit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if the gap limit is exceeded';

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
        $checker = Checker::first();
        $last_checked = $checker->last_checked;
        // $this->info($checker);
        $logs = Logs::whereIn('status', [0, -1])
                        ->where('expired', '>', $last_checked)->count();
        $this->info($logs);
        // logger($logs);
        if ($logs >=15) {
            $data['to'] = 'Krtmanfred@gmail.com';
            // $data['to'] = 'oriebizline@gmail.com';
            $data['subject'] = 'Gap Limit ALert!';
            $data['template_type'] = 'markdown';
            $data['template'] = 'emails.gap-limit';
            sendmail($data);
            $checker->last_checked = now();
            $checker->save();
        }
        return;
    }
}
