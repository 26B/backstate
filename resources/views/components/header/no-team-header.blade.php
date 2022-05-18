<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-teal-400.svg" alt="Workflow">
                </div>
            </div>
            <div class="ml-6 flex space-x-4 items-center">
                <x-button.icon class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100" label="Notifications">
                    <x-backstate::icon name="outline.bell" />
                </x-button.icon>
                <x-backstate::dropdowns.profile />
            </div>
        </div>
    </div>
</nav>
