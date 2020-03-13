<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\TransactionMonitor::class,
        Commands\DailyPayout::class,
        Commands\PaymentFeedback::class,
        Commands\CheckAPiKeyLimit::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {   

        $schedule->command('api_key:check_limit')
                 ->everyFiveMinutes();
                  $schedule->command('payment:feedback')
                 ->everyMinute();
        $schedule->command('confirm:transaction')
                 ->everyFiveMinutes();

        $schedule->command('daily:payout')
               
                 ->dailyAt('10:35');

      
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
