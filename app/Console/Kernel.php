<?php

namespace App\Console;

use App\Console\Commands\wishDelete;
use App\Job;
use App\Riwayat;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

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
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('minute:update')
            ->everyMinute()
            ->runInBackground();
        $schedule->call(static function () {
            Riwayat::where('created_at', '<', Carbon::now()->subHours(1))->delete();
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
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
