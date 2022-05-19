<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $getMethodHash($attributes->wire('then')) }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $getMethodHash($attributes->wire('then')) }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<div x-data="{ isOpen: @entangle('confirmingPassword').defer }">
    <x-backstate::modal.action title="{{ $title }}" additionalInfo="{{ $additionalInfo }}" color="primary">
        <x-slot name="icon">
            <x-backstate::icon name="solid.shield-exclamation" color="primary-600" />
        </x-slot>

        <x-backstate::form.input class="mt-2" name="confirmable_password" type="password" placeholder="{{ __('Password') }}"
            wire:model.defer="confirmablePassword"
            wire:keydown.enter="confirmPassword"
            x-data="{}"
            x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)"
            x-ref="confirmable_password"
        />

        <x-slot name="buttons">
            <x-backstate::button.primary dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-backstate::button.primary>

            <x-backstate::button.white wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-backstate::button.white>
        </x-slot>
    </x-backstate::modal.action>
</div>
@endonce
