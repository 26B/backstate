<?php

namespace TwentySixB\BackState\View\Components\Modal;

use Illuminate\View\Component;

class Action extends Component
{
    /**
     * Modal text with additional information about the action.
     */
    public string $additionalInfo;

    /**
     * If true then action has a cancel button, false otherwise.
     */
    public bool $canCancel;

    /**
     * Primary color of the action.
     */
    public string $color;

    /**
     * Title of the modal action.
     */
    public string $title;

    /**
     * Create a new component instance.
     *
     * @param string $additionalInfo Modal text with additional information about the action.
     * @param bool $canCancel         If true then action has a cancel button, false otherwise.
     * @param string $color           Primary color of the action.
     * @param string $title           Title of the modal action.
     * @return void
     */
    public function __construct(
        string $additionalInfo,
        string $color,
        string $title,
        bool $canCancel = true
    ) {
        $this->additionalInfo = $additionalInfo;
        $this->color = $color;
        $this->title = $title;

        // FIXME: canCancel is not implemented.
        $this->canCancel = $canCancel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.modal.action');
    }
}
