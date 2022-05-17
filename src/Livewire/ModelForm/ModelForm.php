<?php

namespace TwentySixB\BackState\Livewire\ModelForm;

use Livewire\Component;

abstract class ModelForm extends Component
{
    /**
     * Model attributes that will be passed to the form to receive new values.
     */
    public $model;

    /**
     * Subclass of \Illuminate\Database\Eloquent\Model that will be used to get the model to edit or
     *      default values to create a new record.
     */
    protected string $modelClass;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    abstract public function render();

    /**
     * 'save' listener to save a model (create or update form).
     *
     * @return void
     */
    abstract public function save();

    /**
     * Livewire component's public data was updated.
     *
     * @param string $propertyName Key referencing the data that was updated.
     * @return void
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Event names that $this component is listening.
     *
     * @return array Event names.
     */
    protected function getListeners(): array
    {
        return array_merge(['save'], $this->listeners);
    }
}
