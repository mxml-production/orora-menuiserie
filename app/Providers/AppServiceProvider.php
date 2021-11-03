<?php

namespace App\Providers;

use App\Models\Information;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footer_information = Information::all();

        view()->share('footer_information', $footer_information);

        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
