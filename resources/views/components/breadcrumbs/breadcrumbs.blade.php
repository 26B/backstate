<div>
    <nav class="sm:hidden text-sm leading-5 font-medium">
        @if(count($breadcrumbs) > 1)
            <a
                href="{{ $breadcrumbs[count($breadcrumbs) - 2]['href'] }}"
                class="flex items-center hover:text-gray-700 transition duration-150 ease-in-out text-gray-400 hover:text-gray-500"
            >
                <x-backstate::icon name="solid.chevron-left" color="gray-400"/>
                {{ __('Back') }}
            </a>
        @else
            <x-backstate::breadcrumbs.element name="{{ $breadcrumbs[0]['name'] }}" isLast/>
        @endif
    </nav>
    <nav class="hidden sm:flex items-center text-sm leading-5 font-medium">
        @foreach($breadcrumbs as $breadcrumb)
            <x-backstate::breadcrumbs.element
                href="{{ $breadcrumb['href'] }}"
                name="{{ $breadcrumb['name'] }}"
                isLast="{{ $loop->last }}"
            />

            @if (!$loop->last)
            <x-backstate::icon name="solid.chevron-right" color="gray-400"/>
            @endif
        @endforeach
    </nav>
</div>
