<?php

namespace TwentySixB\BackState\View\Components\Button;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Button outline color.
     */
    public string $color;

    /**
     * Link to redirect.
     */
    public ?string $href;

    /**
     * Buttons size.
     */
    public string $size;

    /**
     * Button type.
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string  $type Button type.
     * @param ?string $href Link to redirect.
     * @param string $size Button size.
     * @param string $color Button outline color.
     * @return void
     */
    public function __construct(
        string $type = 'button',
        ?string $href = null,
        string $size = 'md',
        string $color = 'primary'
    ) {
        $this->type = $type;
        $this->href = $href;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * X and Y paddings based of button size.
     *
     * @return string X and Y padding classes.
     */
    private function getPaddingFromSizeCategory(): string
    {
        switch ($this->size) {
            case 'xs':
                return 'px-2.5 py-1.5';
            case 'sm':
                return 'px-3 py-2';
            case 'xl':
                return 'px-6 py-3';
            case 'lg':
            case 'md':
            default:
                return 'px-4 py-2';
        }
    }

    /**
     * Text size based of button size.
     *
     * @return string Text class size.
     */
    private function getTextSizeFromSizeCategory(): string
    {
        switch ($this->size) {
            case 'xs':
                return 'text-xs';
            case 'xl':
            case 'lg':
                return 'text-base';
            case 'sm':
            case 'md':
            default:
                return 'text-sm';
        }
    }

    /**
     * Button base class.
     *
     * @return string Button base classes.
     */
    public function getBaseClass(): string
    {
        return implode(' ', [
            'inline-flex',
            'items-center',
            $this->getPaddingFromSizeCategory(),
            $this->getTextSizeFromSizeCategory(),
            'border',
            'font-medium',
            'rounded',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-2',
            'focus:ring-' . $this->color . '-500',
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.button.base');
    }
}
