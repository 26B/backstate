<section aria-labelledby="gallery-heading">
    <ul class="py-5 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        {{ $slot }}
    </ul>

    @isset ($links)
    <div class="mt-2 pt-2 border-t border-gray-200">
        {{ $links }}
    </div>
    @endisset
</section>
