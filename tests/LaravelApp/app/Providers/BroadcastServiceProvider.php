<?php

namespace App\Providers;

use QuantaForge\Support\Facades\Broadcast;
use QuantaForge\Support\ServiceProvider;

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
