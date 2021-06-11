<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="container mx-auto md:p-6 p-4">
                <x-jet-welcome />
        </div>
    </div>
</x-app-layout>
