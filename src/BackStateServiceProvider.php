<?php

namespace TwentySixB\BackState;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use TwentySixB\BackState\Livewire\Table;

class BackStateServiceProvider extends ServiceProvider
{
    /**
     * Register view blade and livewire components.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'backstate');
        $this->publishes(
            [
                __DIR__.'/../resources/views' => resource_path('views/vendor/backstate')
            ],
            'backstate-views'
        );

        $this->callAfterResolving(
            BladeCompiler::class,
            function () {
                Blade::anonymousComponentNamespace('backstate');
                Blade::componentNamespace('TwentySixB\\BackState\\View\\Components', 'backstate');
            }
        );

        // TODO: Review and resolve.
        // Livewire::component('table', Table::class);
    }
}
