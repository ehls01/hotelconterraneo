<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $cli_memory_limit ='256M';
        if (php_sapi_name() === 'cli' && ! empty($cli_memory_limit)){
            ini_set('memory_limit', $cli_memory_limit);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
    }
}
