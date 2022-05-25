{{-- https://tailwindui.com/components/application-ui/overlays/notifications#component-7d20f80f5b5fc2a13c14034d3d60115e --}}
<!-- This example requires Tailwind CSS v2.0+ -->
<!-- Global notification live region, render this permanently at the end of the document -->
@props([
    'title' => '',
    'body'  => '',
])
<div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
    <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
      <!--
        Notification panel, dynamically insert this into the live region when it needs to be displayed

        Entering: "transform ease-out duration-300 transition"
          From: "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
          To: "translate-y-0 opacity-100 sm:translate-x-0"
        Leaving: "transition ease-in duration-100"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="max-w-md w-full bg-white shadow-lg rounded-lg pointer-events-auto flex ring-1 ring-black ring-opacity-5 divide-x divide-gray-200">
        <div class="w-0 flex-1 flex items-center p-4">
          <div class="w-full">
            <p class="text-sm font-medium text-gray-900">{{ $title }}</p>
            <p class="mt-1 text-sm text-gray-500">{{ $body }}</p>
          </div>
        </div>
        <div class="flex">
          <div class="flex flex-col divide-y divide-gray-200">
            @isset($primary_action)
            <div class="h-0 flex-1 flex">
                {{ $primary_action }}
            </div>
            @endisset
            @isset($secondary_action)
            <div class="h-0 flex-1 flex">
                {{ $secondary_action }}
            </div>
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>
