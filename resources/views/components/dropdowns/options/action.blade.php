@props(['action', 'text'])

<form method="POST" action="{{ url($action) }}">
    @csrf
    <button
        type="submit"
        class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
               hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
        role="menuitem"
    >
        {{ $text }}
    </button>
</form>
