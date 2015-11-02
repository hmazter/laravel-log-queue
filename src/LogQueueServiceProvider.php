<?php
/**
 * Laravel Log Queue
 *
 * @author    Kristoffer Högberg <krihog@gmail.com>
 * @link      https://github.com/hmazter/laravel-log-queue
 */

namespace Hmazter\LaravelLogQueue;

use Illuminate\Support\ServiceProvider;

class LogQueueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $manager = $this->app->make('queue');
        $manager->extend('log', function () {
            return new LogConnector();
        });
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
