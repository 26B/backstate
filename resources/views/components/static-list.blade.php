<ul class="max-h-60 text-base overflow-auto focus:outline-none sm:text-sm">
    @foreach ($items as $key => $item)
    <li class="w-full px-4 hover:bg-gray-100">
        {{ $slot }}
        <a
            href=""
            id="list_item_{{ $getItemKey($item, $key) }}"
            role="option"
            class="group w-full relative text-left text-gray-900 select-none py-2 pl-8 pr-4 text-gray-900 focus:outline-none"
        >
            <div class="block truncate" :class="{ 'font-semibold': selected == '{{ $getItemKey($item, $key) }}' }">
                {{ $getItemLabel($item) }}
            </div>

            <span x-show="selected == '{{ $getItemKey($item, $key) }}'" class="absolute inset-y-0 left-0 flex items-center">
                <x-backstate::icon name="solid.check" size="5" class="fill-current text-primary-600"/>
            </span>
        </a>
    </li>
    @endforeach
</ul>
