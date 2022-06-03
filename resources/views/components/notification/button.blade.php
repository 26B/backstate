<button {{ $attributes->merge(['class' => 'w-full border border-transparent rounded-none rounded-tr-lg px-4 py-3 flex items-center justify-center text-sm font-medium text-primary-600 hover:text-primary-500 focus:outline-none focus:z-10 focus:ring-2 focus:ring-primary-500']) }}>
{{ $slot }}
</button>
