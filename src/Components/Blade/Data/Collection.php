<?php

namespace TwentySixB\BackState\Components\Blade\Data;

use Illuminate\View\Component;

class Collection extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.data.collection');
    }
}
