<?php

namespace TeachMe\Providers;

use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class BusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param \Illuminate\Bus\Dispatcher $dispatcher
     */
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->mapUsing(function ($command) {
            return Dispatcher::simpleMapping(
                $command, 'TeachMe\Commands', 'TeachMe\Handlers\Commands'
            );
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
