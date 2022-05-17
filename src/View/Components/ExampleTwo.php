<?php

namespace TwentySixB\BackState\View\Components;

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
        return view('backstate::components.example-two');
    }
}
