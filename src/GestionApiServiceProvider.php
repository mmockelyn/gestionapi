<?php

namespace Gestion\API;

use Illuminate\Support\ServiceProvider;

class GestionApiServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/gestionapi.php' => config_path('gestionapi.php')
        ]);
    }
}
