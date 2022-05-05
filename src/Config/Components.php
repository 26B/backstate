<?php

namespace TwentySixB\BackState\Config;

class Components
{

    public static function config(): array
    {
        return [
            'componentsName' => [
                'blade' => [
                    'button.base',
                    'button.primary',
                    'button.secondary',
                    'button.white',
                    'data.collection',
                    'data.group',
                    'data.in-item',
                    'data.out-item',
                    'example-two',
                    'icon',
                    'input',
                    'input-menu.checkbox',
                    'input-menu.options-list',
                    'input-menu.radio-group',
                    'input-menu.select',
                    'searchbar',
                    'stacked-list.container',
                    'stacked-list.item',
                    'table.data-cell',
                    'table.header-cell',
                    'modal.panel',
                    'modal.action',
                    'modal.delete-model',
                ],
                'livewire' => [
                    'example',
                    'example-change-view',
                    'example-table',
                ],
            ],
            'baseName' => [
                'blade'    => 'backstate::',
                'livewire' => 'backstate-',
            ],
            'namespaces' => [
                'blade'    => 'TwentySixB\\BackState\\Components\\Blade\\',
                'livewire' => 'TwentySixB\\BackState\\Components\\Livewire\\',
            ]
        ];
    }
}
