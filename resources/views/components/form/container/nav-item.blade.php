<a
    :class="{ 'text-primary hover:text-primary-dark': tab === '{{ $id }}' }"
    @click.prevent="tab = '{{ $id }}'; window.location.hash = '{{ $id }}'"
    href="#{{ $id }}"
    class="bg-gray-light hover:bg-gray-medium group rounded-md px-3 py-2 flex items-center text-sm font-medium" aria-current="page"
>
    {{ $slot }}
    <span class="truncate">{{ $title }}</span>
</a>
