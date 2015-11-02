<?php

namespace Hmazter\LaravelLogQueue;

use Illuminate\Support\ServiceProvider;
use \Queue;

class LogQueueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Queue::addConnector('log', function () {
            return new LogConnector();
        });
    }
}