@props([
    'rows' => [],
    'total' => 0,
])

<div class="flex -space-x-2 overflow-hidden">
    {{ $slot }}

    @if ($total > $rows->count())
        <div class="text-sm text-gray-500 inline-block pl-2 pt-1">
            +{{ $total - $rows->count() }}
        </div>
    @endif
</div>
