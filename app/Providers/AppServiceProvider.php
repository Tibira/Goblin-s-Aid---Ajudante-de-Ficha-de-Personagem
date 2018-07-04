<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
/*use Illuminate\Routing\UrlGenerator;*/

class AppServiceProvider extends ServiceProvider
{
    public function boot(/*UrlGenerator $url*/)
    {
        Schema::defaultStringLength(191);
        /*if(env('REDIRECT_HTTPS')){
            $url->formatScheme('https');
        }*/
    }

    public function register()
    {
        /*if(env('REDIRECT_HTTPS')){
            $this->app['request']->server->set('HTTPS',true);
        }*/
    }
}
