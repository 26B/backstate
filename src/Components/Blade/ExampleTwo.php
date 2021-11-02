<?php

namespace TwentySixB\BackState\Components\Blade;

use Illuminate\View\Component;

class ExampleTwo extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.example-two');
    }
}
