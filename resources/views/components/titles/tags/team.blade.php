{{-- TODO: Remove if not in use --}}
@dd('Not sure if used, icons.at should break and be replaced.')

@props(['team'])

<dt class="sr-only">{{ __('Team') }}</dt>
<dd class="flex items-center text-sm leading-5 text-cool-gray-500 font-light capitalize">
    <x-icons.at />
    {{-- <x-backstate::icon name="at" /> --}}
    {{ $team }}
</dd>
