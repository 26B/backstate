<?php

namespace TwentySixB\BackState\Livewire\Modal;

use Illuminate\Support\Collection;
use Livewire\Component;

abstract class AbstractOptions extends Component {

    use ActionPanelTrait;

    /**
     * Selected option name.
     *
     * @var string
     */
    public string $selected = '';

    /**
     * Defined listeners.
     *
     * @var array
     */
    protected $listeners = [
        'saving'   => 'saving',
        'saved'    => 'afterSaved',
        'canceled' => 'afterCanceled',
    ];

    /**
     * Collection of options to display on the modal.
     *
     * Should be a named array containing items with `name` and `description`.
     *
     * @return Collection
     */
    abstract public function getOptions() : Collection;

    /**
     * Method that will usually handle saving the changes.
     *
     * @return void
     */
    abstract public function saving() : void;

    /**
     * @inheritDoc
     *
     * @return void
     */
    public function render()
    {
        return view('backstate::components.modal.options');
    }

    /**
     * Action that occurs when save button is pressed.
     *
     * @return void
     */
    public function save() : void
    {
        $this->emitSelf('saving');
    }

    /**
     * Returns the selected role.
     *
     * @return string
     */
    public function getSelected() : string
    {
        return $this->selected;
    }
}
