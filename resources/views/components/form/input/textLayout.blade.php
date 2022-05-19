@props(['autocomplete', 'autofocus' => false, 'id', 'label', 'name', 'value' => null])

<label for="{{ $id }}" class="block text-sm font-medium leading-5 text-gray-700">
    {{ $label }}
</label>
<div class="mt-1 rounded-md shadow-sm">
    <input
        id="{{ $id }}"
        name="{{ $name ? $name : $id }}"
        autocomplete="{{ $autocomplete ? $autocomplete : $id }}"
        value="{{ $value ?? '' }}"
        {{ $autofocus ? 'autofocus' : '' }}
        {{ $attributes->merge([
            'class' => 'appearance-none block w-full px-3 py-2 border border-gray-300' .
                       ' rounded-md placeholder-gray-400 focus:outline-none' .
                       ' focus:shadow-outline-blue focus:border-blue-300 transition' .
                       ' duration-150 ease-in-out sm:text-sm sm:leading-5',
        ]) }}
    />
    {{ $slot }}
</div>
