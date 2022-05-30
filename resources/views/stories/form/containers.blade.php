@storybook([
    'name' => 'Containers',
    'args' => [
    ],
    'argTypes' => [
    ],
])

<x-backstate::form.container default="tab1">
    <x-slot name="nav">
        <x-backstate::form.container.nav-item
            title="Tab 1"
            id="tab1"
        >
            <svg class="flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </x-backstate::form.container.nav-item>
        <x-backstate::form.container.nav-item
            title="Tab 2"
            id="tab2"
        >
            <svg class="flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
            </svg>
        </x-backstate::form.container.nav-item>
    </x-slot>
    <x-backstate::form.container.section id="tab1">
        <h1>Tab 1</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam est at accusamus rerum, hic natus, neque eligendi ut, dolores ullam corporis quasi. Ab repellendus exercitationem ad recusandae officiis atque ut?</p>
    </x-backstate::form.container.section>
    <x-backstate::form.container.section id="tab2">
        <h1>Tab 2</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui deleniti modi distinctio eaque numquam error suscipit repudiandae perferendis quod. Reprehenderit voluptatum cumque pariatur quos similique culpa atque aperiam officiis minus.</p>
    </x-backstate::form.container.section>
</x-backstate::form.container>
