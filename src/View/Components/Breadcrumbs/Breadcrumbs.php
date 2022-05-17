<?php

namespace TwentySixB\BackState\View\Components\Breadcrumbs;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * Breadcrumbs locations.
     */
    public array $breadcrumbs;

    /**
     * Create a new component instance.
     *
     * @param array $breadcrumbs Breadcrumbs locations.
     * @return void
     */
    public function __construct(array $breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.breadcrumbs.breadcrumbs');
    }
}
