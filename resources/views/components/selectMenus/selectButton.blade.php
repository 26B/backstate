<button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
    <div class="flex items-center space-x-3">
        {{ $slot }}
    </div>
    <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
        <x-icons.selector />
    </span>
</button>
