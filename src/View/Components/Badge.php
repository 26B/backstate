<?php

namespace TwentySixB\BackState\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * The resulting color based on badge's type.
     */
    public string $color;

    /**
     * Text to display inside the badge.
     */
    public string $text;

    /**
     * Create a new component instance.
     *
     * @param string $color Background color of the badge.
     * @param string $text  Text to display inside the badge.
     * @return void
     */
    public function __construct(string $color, string $text)
    {
        $this->color = $color;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.badge');
    }
}
