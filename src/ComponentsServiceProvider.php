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
            $this->registerComponent('button');
            $this->registerComponent('outline-button');
            $this->registerComponent('secondary-button');
            $this->registerComponent('white-button');
            $this->registerComponent('default-input');
            $this->registerComponent('label');
            $this->registerComponent('input');
            $this->registerComponent('error');
            $this->registerComponent('email');
            $this->registerComponent('number');
            $this->registerComponent('password');
            $this->registerComponent('select');
            $this->registerComponent('radio');
            $this->registerComponent('checkbox');
            $this->registerComponent('textarea');

            $this->registerComponent('errors');
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
