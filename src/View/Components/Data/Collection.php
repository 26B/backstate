<?php

namespace TwentySixB\BackState\View\Components\Data;

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
        return view('backstate::components.data.collection');
    }
}
