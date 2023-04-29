<?php

namespace Sharkawy;

use Illuminate\Support\ServiceProvider;

class MediaLibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sharkawy.php' => config_path('sharkawy.php'),
        ], 'config');
    }
}
