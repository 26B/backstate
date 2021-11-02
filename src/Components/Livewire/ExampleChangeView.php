<?php

namespace TwentySixB\BackState\Components\Livewire;

use Livewire\Component;

class ExampleChangeView extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::livewire.example-change-view');
    }
}
