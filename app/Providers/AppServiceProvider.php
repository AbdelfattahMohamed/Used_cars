<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;



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
	function boot()
	{
		Builder::defaultStringLength(191);
	}
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
}
