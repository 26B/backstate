@props(['item', 'itemImgAttr', 'itemTextAttr'])

<x-selectMenus.items.item item="{{ $item }}">
    <div class="flex items-center space-x-3">
        <img class="h-8 w-8 rounded-md" src=" {{ $item->{$itemImgAttr} }}">
        <span
            class="font-normal block truncate"
            :class="{ 'font-semibold': selectedItemId === {{ $item->id }},
                      'font-normal': selectedItemId !== {{ $item->id }} }"
        >
            {{ $item->{$itemTextAttr}}}
        </span>
    </div>
</x-selectMenus.items.item>
