<?php

namespace TwentySixB\BackState\Components\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $a;

    public $c;

    public $b = 'abc';

    public $search;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::livewire.example');
    }
}
