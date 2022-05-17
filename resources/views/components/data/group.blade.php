<div>
    @if (!empty($title))
    <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{ $title }}
    </h3>
    @endif

    @if (!empty($subtitle))
    <p class="text-sm leading-5 text-gray-500">
        {!! $subtitle !!}
    </p>
    @endif

    @if ($inGroup)
    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
        {{ $slot }}
    </div>
    @else
    <dl class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
        {{ $slot }}
    </dl>
    @endif
</div>
