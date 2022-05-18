@props(['status'])

<dt class="sr-only">{{ __('Status') }}
<dd class="ml-2 items-center">
    <x-badges.channel :status="$status"/>
</dd>
