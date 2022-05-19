@if(isset($items) and count($items) > 0)
<div class="bg-white shadow overflow-hidden sm:rounded-md">
    <ul class="divide-y divide-gray-200">
        @foreach ($items as $key => $item)
        <li>
            <x-backstate::stacked-list.item view="{{ $itemView }}" key="{{ $key }}" :item="$item" />
        </li>
        @endforeach
    </ul>
</div>
@else
<div class="text-sm text-gray-900">
    {{ __('No items selected.') }}
</div>
@endif
