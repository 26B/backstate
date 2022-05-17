@if (is_null($href) or $isLast === true)
<div class="{{ $isLast ? 'text-gray-700' : 'text-gray-500' }}">
    {{ $name }}
</div>
@else
<a href="{{ $href }}" class="text-gray-400 hover:text-gray-500 transition duration-150 ease-in-out">
    {{ $name }}
</a>
@endif
