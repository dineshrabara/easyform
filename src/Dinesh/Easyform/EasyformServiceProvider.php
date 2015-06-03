<?php

namespace Dinesh\Easyform;

use Illuminate\Support\ServiceProvider;

class EasyformServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('dinesh/easyform');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        //
        $this->app['EasyForm'] = $this->app->share(function($app) {
            $config = $app['config']['easyform'] ? : $app['config']['easyform::config'];

            return new EasyForm($config);
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function() {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('EasyForm', 'Dinesh\Easyform\Facades\EasyFormFacade');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('EasyForm');
    }

}
