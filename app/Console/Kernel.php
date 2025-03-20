<?php

namespace App\Console;


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Register the commands for the application.
     *
     * @var array
     */
    protected $commands = [
        // Register your commands here
        Commands\GetDBName::class
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Define your scheduled tasks here
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        // Load commands from the 'app/Console/Commands' directory
        $this->load(__DIR__ . '/Commands');

        // Load additional command routes if needed
        require base_path('routes/console.php');
    }
}
