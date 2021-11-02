<?php

namespace TwentySixB\BackState\Components\Livewire;

use App\Models\Set;
use Illuminate\Database\Eloquent\Builder;
use TwentySixB\BackState\Components\Livewire\Table\Column;

class ExampleTable extends Table
{
    protected function columns(): array
    {
        return [
            (new Column('title'))
                ->searchable()
                ->sortable()
                ->setDataViewComponent('backstate::blade.table.data.default'),
            (new Column('Team ID'))
                ->searchable()
                ->setDataAttributes(['class' => 'bg-red-200'])
                ->sortable(fn($query, $sortDir) => $query->orderBy('team_id', $sortDir === 'asc' ? 'desc' : 'asc')),
            (new Column(
                'show', fn($model) => route('teams.sets.show', [$model->team_id, $model->id])
            ))->setHeaderViewComponent(<<<'blade'
                <th scope="col" class="relative px-6 py-3 w-1/12">
                    <span class="sr-only">
                        {{ __('Show') }}
                    </span>
                </th>
            blade,
            true
            )->setDataViewComponent(<<<'blade'
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                        <backstate:icon name="solid.chevron-right" />
                    </a>
                </td>
                blade,
                true
            ),
        ];
    }

    protected function modelQuery(): Builder
    {
        return Set::query();
    }
}
