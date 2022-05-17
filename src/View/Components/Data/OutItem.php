<?php

namespace TwentySixB\BackState\View\Components\Data;

/**
 * Component to be used in a 'data layout' (description list).
 */
class OutItem extends Item
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.data.out-item');
    }
}
