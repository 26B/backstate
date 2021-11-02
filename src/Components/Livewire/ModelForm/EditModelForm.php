<?php

namespace TwentySixB\BackState\Components\Livewire\ModelForm;

abstract class EditModelForm extends ModelForm
{
    /**
     * Mount component, immediately after instantiation and before render().
     *
     * @param mixed $modelId Model id to retrieve from database.
     * @return void
     */
    public function mount($modelId): void
    {
        $this->model = $this->getModel($modelId);
    }

    /**
     * Edit an existing model.
     *
     * @return void
     */
    public function save()
    {
        $this->validate();
        $this->model->save();
    }

    /**
     * Define default values for input attributes before first render.
     *
     * @param mixed $modelId Model id to retrieve from database.
     * @return mixed Model-like object.
     */
    protected function getModel($modelId)
    {
        return $this->modelClass::find($modelId);
    }
}
