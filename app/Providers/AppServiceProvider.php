<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Schema;
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

        Resource::withoutWrapping();

        setLocale(LC_TIME,"tr_TR");
        Carbon::setLocale('tr');

        Schema::defaultStringLength(191);
    }
}
