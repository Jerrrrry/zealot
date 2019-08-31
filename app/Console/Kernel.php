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
        "App\Console\Commands\CacheHua",
        "App\Console\Commands\Twittertest",
        "App\Console\Commands\GenerateSitemap",
        "App\Console\Commands\Tophuas",
        "App\Console\Commands\Huanews",
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('cachehua')->hourly();
        $schedule->command('mjarticles')->hourly();
        $schedule->command('tophuas')->hourly();
        $schedule->command('sitemap')->daily();

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
