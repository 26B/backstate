<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
    <dt class="block text-sm font-medium text-gray-700">
        {{ $label }}
    </dt>
    <dd {{ $attributes->merge(['class' => 'sm:col-span-2 text-sm']) }}>
        {{ $slot }}
    </dd>
</div>
