<?php

namespace Bhavinjr\Ekomi\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use Bhavinjr\Ekomi\Ekomi;
use Bhavinjr\Ekomi\Api;

class EkomiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishConfiguration();
    }

    public function register()
    {
        $config = __DIR__ . '/../../config/ekomi.php';
        $this->mergeConfigFrom($config, 'ekomi');

        $this->app->singleton(Ekomi::class, function () {
            $ekomiConfig = config('ekomi');

            return new Ekomi(
                    $ekomiConfig['key'],
                    $ekomiConfig['secret']
                );
        });
        $this->app->alias(Ekomi::class, 'ekomi');
        
        // $this->app->singleton('ekomi', Ekomi::class);
    }

    public function provides()
    {
        return ['Ekomi'];
    }
    
    public function publishConfiguration()
    {
        $path   =   realpath(__DIR__.'/../../config/ekomi.php');
        $this->publishes([$path => config_path('ekomi.php')], 'config');
    }
}
