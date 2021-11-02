<?php

namespace TwentySixB\BackState\Components\Blade;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Icon color.
     */
    public ?string $color;

    /**
     * Icon path, example: 'backstate::blade.icon.solid.chevron-right',
     *      'backstate::blade.icon.outline.home'.
     */
    private string $path;

    /**
     * Icon size (common: 6, 5).
     */
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param  string $name  Icon name, example: 'solid.chevron-right', 'outline.home'.
     * @param  int    $size  Icon size (common: 6, 5).
     * @param  string $color Icon's color.
     * @return void
     */
    public function __construct(string $name, int $size = 6, ?string $color = null)
    {
        $this->path = 'backstate::blade.icon.'.$name;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view($this->path);
    }
}
