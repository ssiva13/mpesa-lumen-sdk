<?php

/**
 * Date 13/04/2023
 *
 * @author   Simon Siva <simonsiva13@gmail.com>
 */

namespace Ssiva\MpesaLumenSdk;

use Illuminate\Support\ServiceProvider;
use Ssiva\MpesaDaraja\Mpesa;

class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // $this->publishes([
        //     __DIR__.'/../config/mpesa.php' => config_path('mpesa.php')
        // ], 'mpesa_config');
    }
    
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('mpesa-daraja', function () {
            return new Mpesa();
        });
    }
}