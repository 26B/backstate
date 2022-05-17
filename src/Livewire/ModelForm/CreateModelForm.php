<?php

namespace TwentySixB\BackState\Livewire\ModelForm;

abstract class CreateModelForm extends ModelForm
{
    /**
     * Mount component, immediately after instantiation and before render().
     *
     * @return void
     */
    public function mount(): void
    {
        $this->model = $this->getDefaultModel();
    }

    /**
     * Create a new model.
     *
     * @return void
     */
    public function save()
    {
        $this->validate();
        $this->model->save();
    }

    /**
     * Define default values for the model to create before first render.
     *
     * @return mixed A model-like object
     */
    protected function getDefaultModel()
    {
        return new $this->modelClass();
    }
}
