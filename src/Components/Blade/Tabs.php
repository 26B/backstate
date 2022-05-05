<?php

namespace TwentySixB\BackState\Components\Blade;

use Illuminate\View\Component;

class Tabs extends Component
{
    /**
     * Active tab to show.
     */
    public string $activeTab;

    /**
     * Tabs to show [`tab key` => `tab value`].
     */
    public array $tabs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $tabs, ?string $activeTab = null)
    {
        $this->tabs = $tabs;
        $this->activeTab = $activeTab ?? array_key_first($this->tabs);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.tabs');
    }
}
