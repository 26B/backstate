<?php

namespace TwentySixB\BackState;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;
use TwentySixB\BackState\Components\Blade\Table\Column;
use TwentySixB\BackState\Config\Components;

class BackStateServiceProvider extends ServiceProvider
{
    /**
     * Register view blade and livewire components.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'backstate');
        $this->publishes(
            [
                __DIR__.'/../resources/views' => resource_path('views/vendor/backstate')
            ],
            'backstate-views'
        );

        $this->registerCompiler();
        $this->registerComponents();
        $this->registerPrivateComponents();
    }

    /**
     * Register extended version of blade compiler to accept `<backstate:...` tags.
     *
     * @return void
     */
    private function registerCompiler(): void
    {
        $this->app->extend(
            BladeCompiler::class, function ($compiler, $app) {
                $newCompiler = new BackStateBladeCompiler($app['files'], $app['config']['view.compiled']);
                $newCompiler->clone($compiler);
                return $newCompiler;
            }
        );
    }

    /**
     * Register backstate blade and livewire components (in TwentySixB\BackState\Config\Components).
     *
     * @return void
     */
    private function registerComponents(): void
    {
        $componentsConfig = Components::config();
        $componentNamesByCompiler = $componentsConfig['componentsName'];
        $restoreTags = $componentsConfig['baseName'];
        $namespaces = $componentsConfig['namespaces'];

        foreach ($componentNamesByCompiler as $compiler => $componentsName) {
            foreach ($componentsName as $name) {
                $original = $restoreTags[$compiler].$name;
                $class = str_replace(['.', '-'], ['\\', ''], ucwords($name, "\-\."));

                if ($compiler === 'livewire') {
                    Livewire::component($original, $namespaces['livewire'].$class);
                } else if ($compiler === 'blade') {
                    Blade::component($original, $namespaces['blade'].$class);
                }
            }
        }
    }

    /**
     * Register internal (private) blade and livewire components.
     *
     * @return void
     */
    private function registerPrivateComponents(): void
    {
        Blade::component('table.column', Column::class);
    }
}
