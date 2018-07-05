<?php

namespace Eluminatis\Assinatura;

use Illuminate\Support\ServiceProvider;

class EluminatisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ComandoAssinar::class,
            ]);
        }
    }
}
