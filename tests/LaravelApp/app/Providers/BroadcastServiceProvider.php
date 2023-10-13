<?php

namespace App\Providers;

use QuantaQuirk\Support\Facades\Broadcast;
use QuantaQuirk\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
