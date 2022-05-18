@props(['team'])

<form method="POST" action="{{ route('current-team.update') }}">
    @method('PUT')
    @csrf

    <!-- Hidden Team ID -->
    <input type="hidden" name="team_id" value="{{ $team->id }}">

    <a class="flex hover:bg-gray-100 pl-4 cursor-pointer" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
        <div class="relative flex pl-6 text-left text-gray-900 select-none py-2 focus:outline-none">
            @if (Auth::user()->isCurrentTeam($team))
            <div class="block truncate font-semibold">
                {{ $team->name }}
            </div>

            <span class="absolute inset-y-0 left-0 flex items-center">
                <x-backstate::icon name="solid.check" size="5" class="fill-current text-primary-600"/>
            </span>
            @else
            <div class="block truncate">
                {{ $team->name }}
            </div>
            @endif
        </div>
    </a>
</form>
