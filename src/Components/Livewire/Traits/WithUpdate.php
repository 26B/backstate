<?php

namespace TwentySixB\BackState\Components\Livewire\Traits;

trait WithUpdate
{
    public $update = false;

    public function getListeners()
    {
        return array_merge(parent::getListeners(), ['update' => 'update']);
    }

    public function update(): void
    {
        $this->update != $this->update;
    }
}
