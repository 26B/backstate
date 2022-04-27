@props([
    'users' => [],
    'total' => 0,
])

<div class="flex -space-x-2 overflow-hidden">
    @foreach ($users as $user)
        <x-backstate::avatar.single :user="$user" class="h-10 w-10" />
    @endforeach

    <div class="text-sm text-gray-500 inline-block pl-2 pt-1">
        @if ($total > $users->count())
            +{{ $total - $users->count() }}
        @endif
    </div>
</div>
