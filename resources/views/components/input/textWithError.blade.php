@props([
    'id',
    'label',
    'autocomplete' => null,
    'autofocus'    => false,
    'error'        => null,
    'name'         => null,
    'value'        => null
])

<x-input.textLayout
    autocomplete="{{ $autocomplete }}"
    autofocus="{{ $autofocus }}"
    id="{{ $id }}"
    label="{{ $label }}"
    name="{{ $name }}"
    value="{{ $value }}"
    :attributes="$attributes->merge(['class' => ($error != '' ? 'border-red-500' : ''),])"
>
    @if($error !== null)
        <p class="text-red-500 text-xs italic">
            {{ $error }}
        </p>
    @endif
</x-input.textLayout>
