<?php

namespace Marshmallow\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class ComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'marshmallow');

        $this->configureComponents();
        $this->configurePublishing();
    }

    /**
     * Configure the Marshmallow Blade components.
     *
     * @return void
     */
    protected function configureComponents()
    {

        $this->callAfterResolving(BladeCompiler::class, function () {

            /**
             * Navigation
             */
            $this->registerComponent('navigation.cart');
            $this->registerComponent('navigation.dropdown-link');
            $this->registerComponent('navigation.dropdown');
            $this->registerComponent('navigation.link');

            /**
             * Products
             */
            $this->registerComponent('product.image');

            /**
             * Form fields
             */
            $this->registerComponent('button');
            $this->registerComponent('checkbox');
            $this->registerComponent('default-authentication-card');
            $this->registerComponent('default-input');
            $this->registerComponent('divider');
            $this->registerComponent('email');
            $this->registerComponent('error');
            $this->registerComponent('errors');
            $this->registerComponent('image-modal');
            $this->registerComponent('input');
            $this->registerComponent('label');
            $this->registerComponent('link');
            $this->registerComponent('list-image');
            $this->registerComponent('number');
            $this->registerComponent('outline-button');
            $this->registerComponent('password');
            $this->registerComponent('radio');
            $this->registerComponent('secondary-button');
            $this->registerComponent('select');
            $this->registerComponent('textarea');
            $this->registerComponent('tooltip-label');
            $this->registerComponent('tooltip');
            $this->registerComponent('usp-fontawesome');
            $this->registerComponent('white-button');
            $this->registerComponent('wysiwyc');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('marshmallow::components.' . $component, 'mm-' . $component);
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/marshmallow'),
        ], 'marshmallow-views');
    }
}
