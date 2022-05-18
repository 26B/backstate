@props(['activeOption' => 'dashboard', 'options' => null])

@php
    // dd(Auth::user()->belongsToAnyTeam());
@endphp
@php
    $activeOptionIndex = -1;
    $options ??= [
        [
            'name' => 'dashboard',
            'href' => route('dashboard'),
            'text' => _('Dashboard')
        ],
        [
            'name' => 'sets',
            'href' => route('teams.sets.index', [Auth::user()->currentTeam]),
            'text' => __('Sets')
        ],
        [
            'name' => 'channels',
            'href' => route('teams.channels.index', [Auth::user()->currentTeam]),
            'text' => _('Channels')
        ],
        [
            'name' => 'devices',
            'href' => route('teams.devices.index', [Auth::user()->currentTeam]),
            'text' => __('Devices')
        ],
        [
            'name' => 'themes',
            'href' => route('teams.themes.index', [Auth::user()->currentTeam]),
            'text' => _('Themes')
        ],
        [
            'name' => 'media',
            'href' => route('teams.media.index', [Auth::user()->currentTeam]),
            'text' => __('Media')
        ]
    ];

    $idx = 0;
    foreach($options as $option) {
        if ($activeOption === $option['name']) {
            $activeOptionIndex = $idx;
            break;
        }

        $idx++;
    }
@endphp

<nav class="bg-white border-b border-gray-200 z-10">
    <div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex items-center flex-shrink-0">
                    <img class="block w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-teal-400.svg" alt="Workflow">
                </div>
                <div class="flex ml-6 space-x-8">
                    @foreach($options as $option)
                        <x-backstate::header.option
                            href="{{ $option['href'] }}"
                            text="{{ $option['text'] }}"
                            isActive="{{ $loop->index == $activeOptionIndex }}"
                        />
                    @endforeach
                </div>
            </div>
            <div class="flex items-center ml-6 space-x-4">
                <x-backstate::btn.icon class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100" label="Notifications">
                    <x-backstate::icon name="outline.bell" />
                </x-backstate::btn.icon>
                <x-backstate::dropdowns.teams />
                <x-backstate::dropdowns.profile />
            </div>
        </div>
    </div>
</nav>
