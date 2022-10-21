<div
    x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : '{{ $default ?? '' }}' }"
    class="lg:grid lg:grid-cols-12 lg:gap-x-5"
>

    @isset($nav)
        <aside class="mb-6 lg:col-span-3">
            <nav class="space-y-1">
                {{ $nav }}
            </nav>
        </aside>
    @endisset

    <div class="lg:col-span-9">
        {{ $slot }}
    </div>
</div>
