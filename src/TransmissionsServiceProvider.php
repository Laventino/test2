<?php

namespace Bitfumes\Transmissions;

use Illuminate\Support\ServiceProvider;

class TransmissionsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','transmission');
    }

    public function register()
    {
        
    }
}