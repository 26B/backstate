@props(['url' => Auth::user()->profile_photo_url])

<button class="flex transition duration-150 ease-in-out text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
    <img class="h-8 w-8 rounded-full" src="{{ $url }}" alt="">
</button>
