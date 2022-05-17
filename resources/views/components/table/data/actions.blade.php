<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <div class="flex">
        @foreach ($value as $item)

        @if (!$loop->first)
        <span class="pointer-events-none">
            &nbsp;{{ "|" }}&nbsp;
        </span>
        @endif

        <button wire:click="{{ $item['click'] }}" class="{{ $item['class'] }} focus:outline-none">
            {{ $item['label'] }}
        </button>
        @endforeach
    </div>
</td>
