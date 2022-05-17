<x-backstate::dropdowns.dropdown>
    <x-slot name="select">
        <x-backstate::btn.avatar
            id="user-menu"
            aria-label="User menu"
            aria-haspopup="true"
        />
    </x-slot>
    <div>
        <x-backstate::dropdowns.options.doubleText
            label="{{ __('Signed in as') }}"
            text="{{ Auth::user()->email }}"
        />
        <x-backstate::border />
        <div class="py-1" >
            <x-backstate::dropdowns.options.link href="{{ route('profile.show')}}" text="{{ __('Profile') }}" />
            <x-backstate::dropdowns.options.link text="{{ __('Support') }}" />
            <x-backstate::dropdowns.options.link text="{{ __('License') }}" />
        </div>
        <x-backstate::border />
        <x-backstate::dropdowns.options.action action="/logout" text="{{ __('Sign out') }}" />
    </div>
</x-backstate::dropdowns.dropdown>
