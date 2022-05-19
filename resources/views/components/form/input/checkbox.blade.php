@props(['id', 'label'])

<div class="flex items-center">
    <input
        :id="$id"
        type="checkbox"
        {{ $attributes->merge([
            'class' => 'form-checkbox h-4 w-4 text-primary-600 transition duration-150 ease-in-out',
        ]) }}
    />
    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
        {{ $label }}
    </label>
</div>
