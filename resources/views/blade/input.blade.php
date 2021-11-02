<div class="flex -space-x-8">
    <input name="{{ $name }}" {{ $attributes->class('block w-full shadow-sm sm:text-sm rounded-md disabled:bg-gray-100 ' . ($errors->has($name) ? 'pr-10 border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500' : 'focus:ring-primary-500 focus:border-primary-500 border-gray-300'))->merge(['type' => 'text']) }}>

    @error($name)
    <div class="pr-3 flex items-center pointer-events-none">
        <backstate:icon name="solid.exclamation-circle" color="red-500" />
    </div>
    @enderror
</div>

@error($name)
<p id="{{ $name }}-error" class="mt-2 text-sm text-red-600">
    {{ $message }}
</p>
@enderror
