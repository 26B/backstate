@props([
    'id',
    'label',
    'autocomplete' => null,
    'autofocus'    => false,
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
    :attributes="$attributes"
/>
