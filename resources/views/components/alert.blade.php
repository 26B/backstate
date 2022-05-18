@props(['message', 'type' => 'warning'])

@php
switch($type) {
    case 'success':
        $iconAndColor = ['checkCircle', 'green'];
    case 'information':
        $iconAndColor = ['informationCircle', 'blue'];
    case 'warning':
        $iconAndColor = ['exclamation', 'yellow'];
    default:
        $iconAndColor = ['x-circle', 'red'];
}

list($icon, $color) = $iconAndColor;
@endphp

<div {{ $attributes->merge([
    'class' => 'bg-' . $color . '-50 border-l-4 border-' . $color . '-400 p-4'
]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            <x-dynamic-component component="{{ 'icon.' . $icon }}"/>
        </div>
        <div class="ml-3">
            <p class="text-sm leading-5 text-{{ $color }}-700">
                {{ $message }}
            </p>
            <div class="mt-4">
                <div class="-mx-2 -my-1.5 flex">
                    <x-button.action color="{{ $color }}" label="Dismiss">
                        {{ __('Dismiss') }}
                    </x-button.action>
                </div>
            </div>
        </div>
    </div>
</div>
