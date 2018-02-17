<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//  RS: 20180213 - RESPALDO por error campo demasiado largo -> use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //RS: 20180213 - RESPALDO por error campo demasiado largo -> Schema::defaultStringLength(191);
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
