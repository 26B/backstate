<td {{ $attributes->merge($extraAttributes)->merge(['class' => 'px-6 py-4 whitespace-nowrap text-sm text-gray-500']) }}>
    @if (empty($value))
    <span class="font-medium text-gray-700">
        {{ __('No data')}}
    </span>
    @else
    {{ $value }}
    @endif
</td>
