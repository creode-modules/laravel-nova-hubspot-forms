<?php

namespace Creode\LaravelNovaHubspotForms;

use Illuminate\Support\ServiceProvider;

class LaravelNovaHubspotFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerBlocks();
    }

    public function registerBlocks()
    {
        new HubSpotFormPageBlock();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-nova-hubspot-forms');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-nova-hubspot-forms'),
        ]);
    }
}
