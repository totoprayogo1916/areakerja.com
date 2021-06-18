<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\wishDelete;
use App\Job;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('minute:update')
                 ->everyMinute()
                 ->runInBackground();
        $schedule->call(function () {
                    Job::where('updated_at', '<', Carbon::now()->subSeconds(10))->delete();
                    // $update = Job::where('updated_at', '<', Carbon::now()->subSeconds(10));
                    // $update->status = 1;
                    // $update->update();
                })
                ->everyMinute()
                ->runInBackground();
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
