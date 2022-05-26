<div
    x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : '{{ $default ?? '' }}' }"
    class="lg:grid lg:grid-cols-12 lg:gap-x-5"
    >
    <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
      <nav class="space-y-1">
          {{ $nav }}
      </nav>
    </aside>

    <div class="m:px-6 lg:px-0 lg:col-span-9">
        {{ $slot }}
    </div>
  </div>
