@php
    $team = $value['team'];
    $member = $value['member'];
    $user = $team->users()->find(auth()->user());
    $user->role = $user->membership->role;

    $canEdit = (!$value['is_owner']) && Laravel\Jetstream\Jetstream::hasRoles() && $user->hasTeamPermission($team, 'manage-team') && $user->hasHigherRoleThan($team, $member);
    $canRemove = (!$value['is_owner']) && $user->hasTeamPermission($team, 'manage-team') && $user->hasHigherRoleThan($team, $member);
@endphp

<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex">

        @if ($canRemove)
        <button wire:click="{{ $value['remove-click'] }}" class="text-red-600 hover:text-red-900 focus:outline-none">
            {{ __('Remove') }}
        </button>
        @endif

        @if ($canEdit && $canRemove)
        <span>
            &nbsp;{{ "|" }}&nbsp;
        </span>
        @endif

        @if ($canEdit)
        <button wire:click="{{ $value['edit-click'] }}" class="text-primary-600 hover:text-primary-900 focus:outline-none">
            {{ __('Edit') }}
        </button>
        @endif
    </div>
</td>
