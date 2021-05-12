<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Purchase;
use App\Models\User;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $purchases = Purchase::where('expiry', '<=', Carbon::now())->get();
            foreach ($purchases as $purchase) {
                // return $purchase;
                $set = Purchase::find($purchase->id);
                $set->status = "Expired";
                $set->save();
                // return $set;
            }

        })->everyMinute();

        $schedule->call(function () {
            $actions = Purchase::where('status', 'Active')->get();
            foreach ($actions as $action) {
                $user = User::find($action->user_id);
                $user->membership = "Premium";
                $user->save();
            }
        })->everyTwoMinutes();
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
