<?php

namespace TwentySixB\BackState\View\Components\Modal;

use Illuminate\View\Component;

class DeleteModel extends Component
{
    /**
     * Action (href) to do (delete model).
     */
    public ?string $action;

    /**
     * Modal text with additional information about the action.
     */
    public ?string $additionalInfo;

    /**
     * Title of the modal action.
     */
    public string $title;

    /**
     * Create a new component instance.
     *
     * @param  string $title          Title of the modal action.
     * @param  string $additionalInfo Modal text with additional information about the action.
     * @param string $action          Action to send deletion request.
     * @return void
     */
    public function __construct(string $title, ?string $additionalInfo = null, ?string $action = null)
    {
        $this->title = $title;
        $this->additionalInfo = $additionalInfo;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.modal.delete-model');
    }
}
