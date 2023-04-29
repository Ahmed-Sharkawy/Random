<?php

namespace Sharkawy;

use Illuminate\Support\ServiceProvider;

class SharkawyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sharkawy.php' => config_path('sharkawy.php'),
        ], 'config');
    }
}
