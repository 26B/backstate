<x-backstate::dropdowns.dropdown>
    <x-slot name="select">
        <button
            id="team-menu"
            type="button"
            class="pl-1.5 group flex justify-between items-center rounded focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2"
            aria-label="Team menu"
            aria-haspopup="true"
        >
            <span class="text-sm font-medium leading-5 text-gray-500 group-hover:text-gray-700">
                {{ auth()->user()->currentTeam->name }}
            </span>
            <x-backstate::icon name="solid.selector" size="5" color="gray-500" class="group-hover:text-gray-700" />
        </button>
    </x-slot>

    <x-backstate::dropdowns.options.text text="{{ __('Manage team') }}" class="text-gray-400 px-4 mt-1" />
    <x-backstate::dropdowns.options.link href="{{ route('teams.show', [Auth::user()->currentTeam])}}" text="{{ __('Current team settings') }}" />
    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
    <x-backstate::dropdowns.options.link href="{{ route('teams.create') }}" text="{{ __('Create new team') }}" />
    @endcan

    <x-backstate::border />
    <x-backstate::dropdowns.options.link href="{{ route('teams.index') }}" text="{!! __('Teams & Invitations') !!}" />
    <x-backstate::border />

    <x-backstate::dropdowns.options.text text="{{ __('Switch teams') }}" class="text-gray-400 px-4 mt-1" />
    <ul class="max-h-60 text-base overflow-auto focus:outline-none sm:text-sm">
        @foreach (Auth::user()->allTeams() as $team)
        <li>
            <x-backstate::switchable-team :team="$team" />
        </li>
        @endforeach
    </ul>
</x-backstate::dropdowns.dropdown>
