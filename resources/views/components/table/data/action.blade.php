<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <button type="button" wire:click="{{ $value['wire-click'] }}" class="focus:outline-none text-{{ $value['color'] ?? 'primary' }}-600 hover:text-{{ $value['color'] ?? 'primary' }}-900 font-medium">
        {{ $value['action'] }}
    </button>
</td>
